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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/slideshow.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/main.scss', 'public/css')
    .sass('resources/sass/_header.scss', 'public/css')
    .sass('resources/sass/_navbar.scss', 'public/css')
    .sass('resources/sass/_section.scss', 'public/css')
    .sass('resources/sass/_footer.scss', 'public/css')
    .sass('resources/sass/_slideshow.scss', 'public/css')
    .sass('resources/sass/_jobs.scss', 'public/css')
    .sass('resources/sass/_bio.scss', 'public/css')
    .sass('resources/sass/_methode.scss', 'public/css')
    .sass('resources/sass/_tarifs.scss', 'public/css')
    .sass('resources/sass/_contact.scss', 'public/css')
    .sass('resources/sass/_politiqueConf.scss', 'public/css')
    .sass('resources/sass/_modaltest.scss', 'public/css')
    .sass('resources/sass/_basicfooterlog.scss', 'public/css')
    .sass('resources/sass/_testes.scss', 'public/css')
    .sass('resources/sass/_userprof.scss', 'public/css')
    .sass('resources/sass/_admin.scss', 'public/css')
    
  

    
