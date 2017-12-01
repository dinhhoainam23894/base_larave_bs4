let mix = require('laravel-mix');

const fs = require('fs');

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
   .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/font-awesome/css/', 'public/vendor/fa/css/')
    .copy('node_modules/font-awesome/fonts/', 'public/vendor/fa/fonts/');

// watch plain js
fs.readdirSync('resources/assets/js/custom').forEach(function(file) {console.log(file)
    mix.scripts("resources/assets/js/custom/" + file, 'public/js/custom/' + file);
});
