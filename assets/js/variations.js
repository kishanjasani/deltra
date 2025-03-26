wp.domReady(function() {
	wp.blocks.registerBlockVariation(
		'core/group',
		{
			name: 'group-shadow-solid',
			title: 'Group - Shadow Solid',
			description: 'Group with shadow and solid background',
			isDefault: false,
			attributes: {
				className: 'is-style-shadow-solid',
				style: {
					border: {
						width: '1px',
					},
					spacing: {
						padding: {
							top: 'var:preset|spacing|x-small',
							right: 'var:preset|spacing|x-small',
							bottom: 'var:preset|spacing|x-small',
							left: 'var:preset|spacing|x-small',
						}
					}
				},
				borderColor: 'contrast',
			},
		}
	)
} );
