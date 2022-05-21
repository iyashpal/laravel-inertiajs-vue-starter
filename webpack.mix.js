const mix = require('laravel-mix');
const { resolve } = require('path')
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

mix.vue()

mix.js('resources/js/app.js', 'public/js')

mix.js('resources/js/debug.js', 'public/js')

mix.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
])

mix.alias({
    '@': 'resources/js',
    ziggy: resolve('vendor/tightenco/ziggy/dist'),
});

if (mix.inProduction()) {
    mix.version();
}
