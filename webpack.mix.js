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
   .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
    });

mix.scripts([
    'resources/js/dashboard/off-canvas.js',
    'resources/js/dashboard/misc.js',
    'resources/js/dashboard/chart.js',
    'resources/js/dashboard/dashboard.js'
], 'public/js/dashboard.js');

mix.copy('./node_modules/font-awesome/fonts/*.*', 'public/fonts/');
mix.copy('./node_modules/mdi/fonts/*.*', 'public/fonts/');
