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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('node_modules/material-design-lite/material.min.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles(['node_modules/material-design-lite/material.min.css', ], 'public/css/mdl.css');
