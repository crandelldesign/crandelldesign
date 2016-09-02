const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

var options = {
    includePaths: [
    'node_modules/bootstrap-sass/assets/stylesheets/',
    'node_modules/font-awesome/scss/',
    'node_modules/slick-carousel/slick/'
    ] 
};

elixir(mix => {
    mix.sass('stylesheet.scss', null, options);
    mix.webpack('defaultlaravel 5.4.js');
});
