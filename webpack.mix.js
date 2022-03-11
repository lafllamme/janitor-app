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
    .scripts([(
        'resources/js/bootstrap.min.js',
        'resources/js/jquery.min.js',
        'resources/js/popper.min.js',
        'resources/js/custom.js')
    ], 'public/js/scripts.js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .copyDirectory('resources/fonts', 'public/fonts')
    .vue();

