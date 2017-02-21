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

mix.js([
    baseJsDir + 'jquery.plugin.min.js',
    baseJsDir + 'jquery.countdown.min.js',
    baseJsDir + 'jquery.colorbox-min.js',
    baseJsDir + 'owl.carousel.min.js',
    baseJsDir + 'bootstrap.min.js',
    baseJsDir + 'prefixfree.min.js',
    baseJsDir + 'jquery.firefly-0.3-min.js',
    baseJsDir + 'script.js',
], 'public/js/all.js').combine([
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
    .copy(baseJsDir + 'jquery-1.11.0.min.js', 'public/js/jquery-1.11.0.min.js')
    .copy(baseJsDir + 'skrollr.min.js', 'public/js/skrollr.min.js')
