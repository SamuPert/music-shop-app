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

mix.sass('resources/sass/footer.scss', 'public/css');

// Homepage stuff
mix.styles([
    'resources/homepage/bootstrap/css/bootstrap.min.css',
    'resources/homepage/css/Montserrat.css',
    'public/fonts/simple-line-icons.min.css',
    'resources/homepage/css/baguetteBox.min.css',
    'resources/homepage/css/smoothproducts.css'
], 'public/css/homepage.css');

mix.scripts([
    'resources/homepage/js/jquery.min.js',
    'resources/homepage/bootstrap/js/bootstrap.min.js',
    'resources/homepage/js/baguetteBox.min.js',
    'resources/homepage/js/smoothproducts.min.js',
    'resources/homepage/js/theme.js',
], 'public/js/homepage.js');

