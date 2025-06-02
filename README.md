# Deltra
The Solid FSE Theme for Modern WordPress Creativity

## 🚀 Features

- Multiple global styles
- Full Site Editing (FSE) support
- Clean and minimal design
- Developer-friendly setup with linting and formatting tools

## 📁 Folder Structure
├── assets/ # Fonts, images, JS
│ ├── fonts/
│ ├── images/
│ └── js/
├── fonts/ # (Optional additional font directory)
├── parts/ # Template parts like header, footer
│ ├── footer.html
│ └── header.html
├── patterns/ # Block patterns
├── templates/ # Template files
├── .editorconfig # Editor configuration
├── .gitignore
├── .nvmrc
├── .stylelintrc.json # Stylelint config
├── LICENSE
├── README.md
├── composer.json # PHP dependencies
├── composer.lock
├── functions.php # Theme functions
├── package.json # Node.js dependencies and scripts
├── package-lock.json
├── phpcs.xml.dist # PHP CodeSniffer config
├── style.css # Theme metadata and fallback styles
└── theme.json # FSE config


---

## 🛠️ Development Scripts

This theme comes with helpful scripts to lint and maintain clean code.

### CSS

Lints all CSS files
```bash
npm run lint:css
```

Fixes linting issues in CSS

```bash
npm run lint:css:fix
```

### PHP

Lints all PHP files using Composer
```
npm run lint:php
```

Fixes PHP issues using Composer
```
npm run lint:php:fix
```

### Theme

Validates the `theme.json` structure
```
npm run lint:theme
```

Escapes all patterns with the text domain `deltra`
```
npm run lint:patterns:fix
```

---

## 📦 Requirements

- WordPress 6.7 or later
- PHP 7.4+
- Node.js 20+ and npm
- Composer 2+

---

## ✅ Installation

1. Clone the repository.
2. Run `npm install` and `composer install`.
3. Develop locally using your favorite WP setup.
4. Activate the theme via the WordPress admin panel.

---

## 🧪 Testing & Linting

Before committing code:

```bash
npm run lint:css
npm run lint:php
npm run lint:theme
```

Happy Coding!
