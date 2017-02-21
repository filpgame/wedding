const {mix} = require('laravel-mix');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
let baseJsDir = "resources/assets/js/";
let baseCssDir = "resources/assets/css/";

mix.js([
    baseJsDir + 'jquery-1.11.0.min.js',
    baseJsDir + 'jquery.plugin.min.js',
    baseJsDir + 'jquery.colorbox-min.js',
    baseJsDir + 'owl.carousel.min.js',
    baseJsDir + 'bootstrap.min.js',
    baseJsDir + 'jquery.countdown.min.js',
    baseJsDir + 'skrollr.min.js',
    baseJsDir + 'prefixfree.min.js',
    baseJsDir + 'jquery.firefly-0.3-min.js',
    baseJsDir + 'jquery.mousewheel.min.js',
    baseJsDir + 'script.js',
    baseJsDir + 'app.js'
], 'public/js/all.js')
    .combine([
        baseCssDir + "bootstrap.css",
        baseCssDir + "bootstrap-theme.css",
        baseCssDir + "font-awesome.min.css",
        baseCssDir + "flaticon/flaticon.css",
        baseCssDir + "owl.carousel.css",
        baseCssDir + "owl.transitions.css",
        baseCssDir + "colorbox.css",
        baseCssDir + "style.css",
        baseCssDir + "brown.css"
        //"jquery.scrollSections.css",
    ], 'public/css/all.css')
    .copy('resources/assets/css/flaticon', 'public/css/flaticon')
// .browserSync({'proxy': 'dev.lipesu.com'});