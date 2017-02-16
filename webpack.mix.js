const {mix} = require('laravel-mix');
// hack for Ubuntu on Windows
try {
    require('os').networkInterfaces();
}
catch (e) {
    require('os').networkInterfaces = () => ({});
}
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

mix.js([
    'jquery-1.11.0.min.js',
    'jquery.plugin.min.js',
    'jquery.colorbox-min.js',
    'owl.carousel.min.js',
    'bootstrap.min.js',
    'jquery.countdown.min.js',
    'skrollr.min.js',
    'prefixfree.min.js',
    'jquery.firefly-0.3-min.js',
    'jquery.mousewheel.min.js',
    'script.js',
    'app.js'
])
    .combine([
        "bootstrap.css",
        "bootstrap-theme.css",
        "font-awesome.min.css",
        "flaticon/flaticon.css",
        "owl.carousel.css",
        "owl.transitions.css",
        "colorbox.css",
        //"jquery.scrollSections.css",
        "style.css",
        "brown.css"
    ])
    .copy('resources/assets/css/flaticon', 'public/css/flaticon')
    // .browserSync({'proxy': 'dev.lipesu.com'});
