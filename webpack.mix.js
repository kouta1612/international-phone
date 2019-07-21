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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/intl-tel-input/build/css/intlTelInput.css', 'public/css')
    .copy('node_modules/intl-tel-input/build/img', 'public/images')
    .js('node_modules/intl-tel-input/build/js/intlTelInput.js', 'public/js');
