const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.styles([
    'resources/css/global.css',
    'resources/css/normalize.css',
    'resources/css/fonts.css',
    'resources/css/components.css',
    //'resources/css/dashboard.css',
    'resources/css/footer.css',
    'resources/css/menu.css',
    'resources/css/contact.css',
    'resources/css/map.css',
    'resources/css/maintenance-page.css',
    'resources/css/home.css',
    'resources/css/services.css',
    'resources/css/about.css',
    'resources/css/portfolio.css',
    'resources/css/projects.css',
    'resources/css/curriculum.css',
    'resources/css/cg.css',
    'resources/css/landing-pages.css',
    'resources/css/error.css',
], 'public/css/all.css');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
