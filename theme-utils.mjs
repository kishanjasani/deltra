import fs from 'fs';
import process from 'process';
import { RewritingStream } from 'parse5-html-rewriting-stream';
import glob from 'fast-glob';

const commands = {
	'escape-patterns': {
		helpText: [
			'Escapes block patterns for pattern files.',
			'<FILES|THEMES>',
			wrapIndent(
				'Individual pattern files to escape or root directories of themes with patterns to escape.'
			),
			'--text-domain=TEXT_DOMAIN',
			wrapIndent(
				'Text domain to use for translations. If omitted and theme directories are passed, this will default to the names of the directories.'
			),
			'EXAMPLE',
			wrapIndent( 'Escape patterns for only modified files in git.' ),
			wrapIndent(
				"node theme-utils.mjs escape-patterns --text-domain=$(basename $PWD) $(git diff --name-only HEAD -- './patterns/*.php')"
			),
		].join( '\n\n' ),
		additionalArgs: '[--text-domain=TEXT_DOMAIN] <FILES|THEMES>',
		run: ( args ) => {
			const [ options, filesOrThemes ] = parseFlags( args );
			if ( ! filesOrThemes.length ) {
				filesOrThemes.push( '.' );
			}
			escapePatterns( filesOrThemes, options );
		},
	},
	help: {
		helpText: 'Displays the main help message.',
		run: ( args ) => showHelp( args?.[ 1 ] ),
	},
};

( async function start() {
	let args = process.argv.slice( 2 );
	let command = args?.[ 0 ];

	if ( ! commands[ command ] ) {
		showHelp();
		process.exit( 1 );
	}

	await commands[ command ].run( args );
} )();

function parseFlags( originalArgs ) {
	const args = [ ...originalArgs ];
	args.shift();
	const options = {};
	while ( args?.[ 0 ]?.startsWith( '--' ) ) {
		const flag = args.shift().slice( 2 );
		const [ key, value ] = flag.split( '=' );
		const camelCaseKey = key.replace( /-([a-z])/g, ( [ , c ] ) =>
			c.toUpperCase()
		);
		options[ camelCaseKey ] = value ?? true;
	}
	return [ options, args ];
}

function wrapIndent(
	text,
	indent = '        ',
	newline = '\n',
	width = process.stdout.columns || 80
) {
	return text
		.match(
			new RegExp(
				`.{1,${ width - indent.length - 1 }}(\\s+|$)|[^\\s]+?(\\s+|$)`,
				'g'
			)
		)
		.map( ( line ) => indent + line )
		.join( newline );
}

function showHelp( command = '' ) {
	if ( ! command || ! commands.hasOwnProperty( command ) ) {
		console.log( `
node theme-utils.mjs [command]

Available commands:
_(theme-utils.mjs help [command] for more details)_

\t${ Object.keys( commands ).join( '\n\t' ) }
	` );
		return;
	}

	const { helpText, additionalArgs } = commands[ command ];
	console.log( `
${ command } ${ additionalArgs ?? '' }

${ helpText }
	` );
}

async function escapePatterns( patternsAndThemes, options ) {
	for ( const themeOrPattern of patternsAndThemes ) {
		const isTheme = fs.statSync( themeOrPattern ).isDirectory();
		const themeSlug = isTheme
			? themeOrPattern
			: themeOrPattern.split( '/', 1 )[ 0 ];
		const textDomain = options?.textDomain ?? themeSlug;
		const patterns = isTheme
			? await glob( `${ themeSlug }/patterns/*.php` )
			: [ themeOrPattern ];

		patterns.forEach( ( file ) => {
			const rewriter = getReWriter( textDomain );
			const tmpFile = `${ file }-tmp`;
			const readStream = fs.createReadStream( file, {
				encoding: 'UTF-8',
			} );
			const writeStream = fs.createWriteStream( tmpFile, {
				encoding: 'UTF-8',
			} );
			writeStream.on( 'finish', () => {
				fs.renameSync( tmpFile, file );
			} );

			readStream.pipe( rewriter ).pipe( writeStream );
		} );
	}

	// Helper functions
	function getReWriter( textDomain ) {
		const rewriter = new RewritingStream();

		rewriter.on( 'text', ( _, raw ) => {
			rewriter.emitRaw( escapeText( raw, textDomain ) );
		} );

		rewriter.on( 'startTag', ( startTag, rawHtml ) => {
			if ( startTag.tagName === 'img' ) {
				const attrs = startTag.attrs.filter( ( attr ) =>
					[ 'src', 'alt' ].includes( attr.name )
				);
				attrs.forEach( ( attr ) => {
					if ( attr.name === 'src' ) {
						attr.value = escapeImagePath( attr.value );
					} else if ( attr.name === 'alt' ) {
						attr.value = escapeText( attr.value, textDomain, true );
					}
				} );
			}

			const ariaLabel = startTag.attrs.find(
				( attr ) => attr.name === 'aria-label'
			);
			if ( ariaLabel ) {
				ariaLabel.value = escapeText(
					ariaLabel.value,
					textDomain,
					true
				);
			}

			rewriter.emitStartTag( startTag );
		} );

		rewriter.on( 'comment', ( comment, rawHtml ) => {
			if ( comment.text.startsWith( '?php' ) ) {
				rewriter.emitRaw( rawHtml );
				return;
			}
			// escape the strings in block config (blocks that are represented as comments)
			// ex: <!-- wp:search {label: "Search"} /-->
			const block = escapeBlockAttrs( comment.text, textDomain );
			rewriter.emitComment( { ...comment, text: block } );
		} );

		return rewriter;
	}

	function escapeBlockAttrs( block, textDomain ) {
		// Set isAttr to true if it is an attribute in the result HTML
		// If set to true, it generates esc_attr_, otherwise it generates esc_html_
		const allowedAttrs = [
			{ name: 'label' },
			{ name: 'placeholder', isAttr: true },
			{ name: 'buttonText' },
			{ name: 'content' },
			{ name: 'ariaLabel', isAttr: true },
		];
		const start = block.indexOf( '{' );
		const end = block.lastIndexOf( '}' );

		const configPrefix = block.slice( 0, start );
		const config = block.slice( start, end + 1 );
		const configSuffix = block.slice( end + 1 );

		try {
			const configJson = JSON.parse( config );
			allowedAttrs.forEach( ( attr ) => {
				if ( ! configJson[ attr.name ] ) return;
				configJson[ attr.name ] = escapeText(
					configJson[ attr.name ],
					textDomain,
					attr.isAttr
				);
			} );
			return configPrefix + JSON.stringify( configJson ) + configSuffix;
		} catch ( error ) {
			// do nothing
			return block;
		}
	}

	function escapeText( text, textDomain, isAttr = false ) {
		const trimmedText = text && text.trim();
		if (
			! textDomain ||
			! trimmedText ||
			trimmedText.startsWith( `<?php` )
		) {
			return text;
		}
		const escFunction = isAttr ? 'esc_attr_e' : 'esc_html_e';
		const spaceChar = text.startsWith( ' ' ) ? '&nbsp;' : '';
		const resultText = text.replace( "'", "\\'" ).trim();
		return `${ spaceChar }<?php ${ escFunction }( '${ resultText }', '${ textDomain }' ); ?>`;
	}

	function escapeImagePath( src ) {
		if ( ! src || src.trim().startsWith( '<?php' ) ) return src;

		const assetsDir = 'assets';
		const parts = src.split( '/' );
		const resultSrc = parts.slice( parts.indexOf( assetsDir ) ).join( '/' );
		return `<?php echo esc_url( get_template_directory_uri() ); ?>/${ resultSrc }`;
	}
}
