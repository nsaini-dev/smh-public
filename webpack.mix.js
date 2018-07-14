let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js').extract([
    'lodash',
    'popper.js',
    'jquery',
    'bootstrap',
    'axios'
]);

mix.sass('resources/assets/sass/app.scss', 'public/css').options({
    processCssUrls: false
});