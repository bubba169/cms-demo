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
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ]);

// Build helium CSS
mix.js('vendor/bubba169/helium/resources/js/helium.js', 'public/vendor/helium/js')
    .postCss('..//helium/resources/css/helium.css', 'public/vendor/helium/css/', [
        require('postcss-import'),
        require('tailwindcss')('vendor/bubba169/helium/tailwind.config.js')
    ]);
