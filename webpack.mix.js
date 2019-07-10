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

mix.js('resources/js/site.js', 'public/js').sourceMaps()
    .sass('resources/sass/site.scss', 'public/css').options({
     processCssUrls: false
    }).sourceMaps()
    .copyDirectory('resources/fonts', 'public/fonts', false)
    .copyDirectory('resources/img', 'public/img', false)
    .copyDirectory('resources/media', 'public/media', false)
    .copyDirectory('resources/video', 'public/video', false);

// Only do cache-busting in production
if (mix.inProduction()) {
 mix.version();
}
