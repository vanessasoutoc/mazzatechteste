let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
	.scripts([
		'resources/assets/bower_resources/moment/min/moment.min.js',
		'resources/assets/bower_resources/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'
		], 'public/js/all.js')
	.styles([
		'resources/assets/bower_resources/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'
		], 'public/css/all.css')
   .sass('resources/assets/sass/app.scss', 'public/css');
