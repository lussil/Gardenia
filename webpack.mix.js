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

// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);

mix.styles([
    'resources/views/site/css/normalize.css',
    'resources/views/site/css/style.css'
], 'public/site/css/style.css')

    .scripts([
        'resources/views/site/js/script.js'
    ], 'public/site/js/script.js')

    .sass('node_modules/bootstrap/scss/boostrap.scss', 'public/site/boostrap.css')

    .scripts('node_modules/jquery/dist/jquery.js','public/site/jquery.js')
    .scripts('node_modules/boostrap/dist/js/boostrap.bunble.js', 'public/site/boostrap.js')
    .version();