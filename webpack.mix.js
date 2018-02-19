let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.copyDirectory('vendor/twbs/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap');

mix.scripts([
    // Pntify
    'node_modules/gentelella/vendors/pnotify/dist/pnotify.js',
    'node_modules/gentelella/vendors/pnotify/dist/pnotify.buttons.js'
],  'public/js/components.js');