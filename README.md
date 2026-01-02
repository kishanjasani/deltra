# Deltra
The Solid FSE Theme for Modern WordPress Creativity

## 🚀 Features

- Multiple global styles
- Full Site Editing (FSE) support
- Clean and minimal design
- Developer-friendly setup with linting and formatting tools

## 📁 Folder Structure
```php
.
├── assets/
│ ├── fonts/
│ ├── images/
│ └── js/
├── fonts/
├── parts/
│ ├── footer.html
│ └── header.html
├── patterns/
├── templates/
├── .editorconfig
├── .gitignore
├── .nvmrc
├── .stylelintrc.json
├── LICENSE
├── README.md
├── composer.json
├── composer.lock
├── functions.php
├── package.json
├── package-lock.json
├── phpcs.xml.dist
├── style.css
└── theme.json
```

---

## 📝 Using Custom Block Styles

### Post Template Styles

The theme includes several post template enhancements that work automatically or can be applied manually:

#### Grid Layout Fix (Auto-applied)
- Automatically ensures post groups fill full height in grid layouts
- Creates consistent card heights when using grid view
- No manual configuration needed

#### Utility Classes
For additional styling options, add these classes manually using the block's **"Additional CSS class(es)"** field in the Advanced settings panel:

- **`has-post-image-tall`** - Apply to featured images or cover blocks for responsive aspect ratios (3:4 on desktop, 16:9 on mobile)
- **`align-left-mobile`** - Forces left text alignment on mobile devices (below 781px)

The styles are automatically enqueued by the theme's asset system when needed.

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
