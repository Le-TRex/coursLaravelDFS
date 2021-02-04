const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy('resources/Front/assets/images/**/*', 'public/images')
    .copy('resources/Front/assets/fonts/**/*', 'public/fonts')

    .copy('resources/Front/assets/css/bootstrap.min.css', 'public/css')
    .copy('resources/Front/assets/css/font-awesome.min.css', 'public/css')
    .copy('resources/Front/assets/css/bootstrap-theme.css', 'public/css')
    .postCss('resources/Front/assets/css/main.css', 'public/css')

    .copy('resources/Front/assets/js/html5shiv.js', 'public/js')
    .copy('resources/Front/assets/js/respond.min.js', 'public/js')

