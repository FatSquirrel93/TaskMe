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

mix.sass('resources/assets/coreui/scss/style.scss', 'public/css');

mix.scripts([
    'node_modules/angular/angular.js',
    'node_modules/angular-route/angular-route.js',
    'node_modules/angular-translate/dist/angular-translate.js',
    'node_modules/angular-loading-bar/build/loading-bar.js'
], 'public/js/vendor.js');

mix.scripts([
    'node_modules/jquery/dist/jquery.js'
], 'public/js/vendor-public.js');

mix.copy(['node_modules/angular-loading-bar/build/loading-bar.css'], 'public/css/vendor.css');
mix.copy(['resources/assets/coreui/fonts'], 'public/fonts');
mix.copy(['resources/assets/coreui/css/font-awesome.css', 'resources/assets/coreui/css/simple-line-icons.css'], 'public/css/fonts.css');

