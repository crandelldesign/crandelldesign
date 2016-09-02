var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    // Build Stylesheet
    mix.sass(
        'stylesheet.scss',
        'public/css/stylesheet.css',
        {
            includePaths: [
                'node_modules/bootstrap-sass/assets/stylesheets/',
                'node_modules/font-awesome/scss/',
                'node_modules/slick-carousel/slick/'
            ]
        }
    );
    // Copy Jquery's JS
    mix.copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/jquery');
    // Copy Bootstrap's JS
    mix.copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', 'resources/assets/js/bootstrap');
    // Copy Slick's JS
    mix.copy('node_modules/slick-carousel/slick/slick.js', 'resources/assets/js/slick');
    // Build JS
    mix.scripts(
        [
            'jquery/jquery.min.js',
            'bootstrap/bootstrap.js',
            'slick/slick.js',
            'default.js'
        ],
        'public/js/default.js'
    );
    // Copy Fonts
    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap');
    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

    // Create Build Numbers
    mix.version(['css/stylesheet.css', 'js/default.js']);
});
