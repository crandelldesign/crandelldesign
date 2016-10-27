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
        'public/css/stylesheet.css'
        /*{
            includePaths: [
                'node_modules/bootstrap-sass/assets/stylesheets/',
                'node_modules/font-awesome/scss/',
                'node_modules/slick-carousel/slick/'
            ]
        }*/
    );
    mix.styles([
        'node_modules/animsition/dist/css/animsition.css',
        'public/css/stylesheet.css'
    ], 'public/css/stylesheet.css', './');
    // Copy Jquery's JS
    mix.copy('node_modules/jquery/dist/jquery.min.js', 'resources/assets/js/jquery');
    // Copy Jquery's JS
    mix.copy('node_modules/jquery.easing/jquery.easing.min.js', 'resources/assets/js/jquery-easing');
    // Copy Bootstrap's JS
    mix.copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', 'resources/assets/js/bootstrap');
    // Copy Slick's JS
    mix.copy('node_modules/slick-carousel/slick/slick.js', 'resources/assets/js/slick');
    // Copy Animsition's JS
    mix.copy('node_modules/animsition/src/js/animsition.js', 'resources/assets/js/animsition');
    // Copy Bootstrap Autohiding Navbar's JS
    mix.copy('node_modules/bootstrap-autohidingnavbar/dist/jquery.bootstrap-autohidingnavbar.js', 'resources/assets/js/bootstrap-autohidingnavbar');
    // Build JS
    mix.scripts(
        [
            'jquery/jquery.min.js',
            'jquery-easing/jquery.easing.min.js',
            'bootstrap/bootstrap.js',
            'animsition/animsition.js',
            'bootstrap-autohidingnavbar/jquery.bootstrap-autohidingnavbar.js',
            'default.js'
        ],
        'public/js/default.js'
    );
    // Build Slideshow JS
    mix.scripts(
        [
            'slick/slick.js',
            'slideshow.js'
        ],
        'public/js/slideshow.js'
    );
    // Copy Fonts
    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap');
    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

    // Create Build Numbers
    mix.version(['css/stylesheet.css', 'js/default.js', 'js/slideshow.js']);
});
