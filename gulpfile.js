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
    mix.sass('style.scss');

    mix.scripts(
		[
	        'jquery-2.2.0.min.js',
	        'bootstrap.min.js',
	        'imagesloaded.pkgd.min.js',
	        'masonry.pkgd.min.js',
	        'master.js'
		],
		'public/js/master.js'
    );
    mix.version(['css/style.css', 'js/master.js', 'js/index.js']);
    mix.copy('resources/assets/fonts', 'public/build/fonts');
    mix.copy('public/img', 'public/build/img');
});
