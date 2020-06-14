let mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')

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

mix.js('resources/themes/admin/js/app.js', 'public/themes/admin/js')

mix
  .sass('resources/themes/admin/sass/app.scss', 'public/themes/admin/css')
  .options({
    processCssUrls: false,
    postCss: [tailwindcss('tailwind.config.js')],
  })
