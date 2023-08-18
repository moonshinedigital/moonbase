# Moonbase Wordpress Theme

Ultra-minimal WordPress theme intended to be used as a base theme for client websites:

* Smartly organized starter CSS using Tailwind, with automatic bundling via `eslint`.
* Lean, well-commented, modern, HTML5 templates.
* Custom layout templates in `partials/`.
* Custom template tags in `inc/template-tags.php` that keep your theme neat and prevent duplication.
* Custom cleanup function in `inc/template-cleanup.php` to remove non-essential WP injections.
* Some small tweaks in `inc/template-functions.php` that can improve the theming experience.
* Uses `@dir-archiver` to bundle theme files as an easy to upload `zip` file.

## Installation

### Requirements

`moonbase` requires the following dependencies:

* [Node.js](https://nodejs.org/)

### Quick Start

Clone or download this repository, change its name to something else, and then you'll need to also run and search and replace for the `mb` prefix, changing it to your own.

### Setup

To start using all the tools that come with `moonbase`  you need to install the necessary Node.js dependencies :

```sh
npm install
```
