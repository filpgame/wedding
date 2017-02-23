const {mix} = require('laravel-mix');

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

let baseJsDir = "resources/assets/js/";
let baseCssDir = "resources/assets/css/";
let baseFontDir = "resources/assets/fonts/";

mix.combine([
    baseCssDir + "bootstrap.css",
    baseCssDir + "bootstrap-theme.css",
    baseCssDir + "font-awesome.min.css",
    baseCssDir + "flaticon/flaticon.css",
    baseCssDir + "owl.carousel.css",
    baseCssDir + "owl.transitions.css",
    baseCssDir + "colorbox.css",
    baseCssDir + "style.css",
    baseCssDir + "blue.css",
], 'public/css/all.css')
    .copy(baseCssDir + 'flaticon', 'public/css')
    .copy(baseFontDir + 'font-awesome', 'public/fonts')
