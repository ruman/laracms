var gulp = require('gulp');
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

/*
 |--------------------------------------------------------------------------
 |  	  ##                   ###     ######   ######  ######## ########  ######
 | 		####                 ## ##   ##    ## ##    ## ##          ##    ##    ##
 |        ##                ##   ##  ##       ##       ##          ##    ##
 |        ##    #######    ##     ##  ######   ######  ######      ##     ######
 |        ##               #########       ##       ## ##          ##          ##
 |        ##               ##     ## ##    ## ##    ## ##          ##    ##    ##
 |      ######             ##     ##  ######   ######  ########    ##     ######
 |--------------------------------------------------------------------------
 | Gulp Asset Management - Create Gulp function copyfiles
 |--------------------------------------------------------------------------
 | Copy any needed files.
 | Do a 'gulp copyfiles' after bower updates
 |--------------------------------------------------------------------------
 */
gulp.task("copyfiles", function() {
	/*
	 |--------------------------------------------------------------------------
	 | Copy AdminLTE Asset Files
	 |--------------------------------------------------------------------------
	 */
	gulp.src("vendor/bower_dl/adminLTE/bootstrap/**")
		.pipe(gulp.dest("resources/assets/adminlte/bootstrap"));

	gulp.src("vendor/bower_dl/adminLTE/build/**")
		.pipe(gulp.dest("resources/assets/adminlte/build"));

	gulp.src("vendor/bower_dl/adminLTE/dist/**")
		.pipe(gulp.dest("resources/assets/adminlte/dist"));

	gulp.src("vendor/bower_dl/adminLTE/pages/**")
		.pipe(gulp.dest("resources/assets/adminlte/pages"));

	gulp.src("vendor/bower_dl/adminLTE/plugins/**")
		.pipe(gulp.dest("resources/assets/adminlte/plugins"));

	gulp.src("vendor/bower_dl/adminLTE/starter.html")
		.pipe(gulp.dest("resources/assets/adminlte/pages/starter.html"));

	gulp.src("vendor/bower_dl/adminLTE/index.html")
		.pipe(gulp.dest("resources/assets/adminlte/pages/example1.html"));

	gulp.src("vendor/bower_dl/adminLTE/index2.html")
		.pipe(gulp.dest("resources/assets/adminlte/pages/example2.html"));

	gulp.src("vendor/bower_dl/adminLTE/index2.html")
		.pipe(gulp.dest("resources/assets/adminlte/pages/example2.html"));

	gulp.src("resources/assets/adminlte/plugins/iCheck/square/blue.png")
		.pipe(gulp.dest("public/assets/css/admin/"));

	gulp.src("resources/assets/adminlte/plugins/iCheck/square/blue@2x.png")
		.pipe(gulp.dest("public/assets/css/admin/"));

	/*
	 |--------------------------------------------------------------------------
	 | Copy Bootstrap and FontAwesome
	 |--------------------------------------------------------------------------
	 */
	gulp.src("vendor/bower_dl/bootstrap/**")
		.pipe(gulp.dest("resources/assets/bootstrap/"));

	gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
		.pipe(gulp.dest("public/assets/fonts"));

	gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
		.pipe(gulp.dest("public/assets/css/fonts"));

	gulp.src("vendor/bower_dl/fontawesome/**")
		.pipe(gulp.dest("resources/assets/fontawesome/"));

	gulp.src("vendor/bower_dl/fontawesome/fonts/**")
		.pipe(gulp.dest("public/assets/css/fonts"));

	gulp.src("vendor/bower_dl/ionicons/**")
		.pipe(gulp.dest("resources/assets/ionicons/"));

	gulp.src("vendor/bower_dl/ionicons/fonts/**")
		.pipe(gulp.dest("public/assets/css/fonts"));

	/*
	 |--------------------------------------------------------------------------
	 | Copy jQuery and jQuery UI JS Assets
	 |--------------------------------------------------------------------------
	 */
	gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
		.pipe(gulp.dest("resources/assets/js/"));

	gulp.src("vendor/bower_dl/jquery-ui/jquery-ui.js")
		.pipe(gulp.dest("resources/assets/js/"));


	/*
	 |--------------------------------------------------------------------------
	 | Copy jQuery.hideShowPassword Assets
	 |--------------------------------------------------------------------------
	 */
	gulp.src("vendor/bower_dl/hideShowPassword/hideShowPassword.min.js")
		.pipe(gulp.dest("resources/assets/js/"));

	gulp.src("vendor/bower_dl/hideShowPassword/hideShowPassword.js")
		.pipe(gulp.dest("resources/assets/js/"));

	gulp.src("vendor/bower_dl/hideShowPassword/images/**")
		.pipe(gulp.dest("public/assets/js/images/"));

	gulp.src("vendor/bower_dl/hideShowPassword/css/**")
		.pipe(gulp.dest("public/assets/css/hideShowPassword/"));

	gulp.src("vendor/bower_dl/hideShowPassword/images/**")
		.pipe(gulp.dest("public/assets/css/hideShowPassword/images"));


	/*
	 |--------------------------------------------------------------------------
	 | Copy jQuery.simpleWeather Assets :: https://github.com/monkeecreate/jquery.simpleWeather/
	 |--------------------------------------------------------------------------
	 */
	gulp.src("vendor/bower_dl/simpleWeather/jquery.simpleWeather.min.js")
		.pipe(gulp.dest("resources/assets/js/"));

	gulp.src("vendor/bower_dl/simpleWeather/jquery.simpleWeather.js")
		.pipe(gulp.dest("resources/assets/js/"));

	/*
	 |--------------------------------------------------------------------------
	 | Copy weather-icons Assets :: http://erikflowers.github.io/weather-icons/
	 |--------------------------------------------------------------------------
	 */
	gulp.src("vendor/bower_dl/weather-icons/**")
		.pipe(gulp.dest("resources/assets/weather-icons/"));

	gulp.src("vendor/bower_dl/weather-icons/font/**")
		.pipe(gulp.dest("public/assets/css/font"));

	/*
	 |--------------------------------------------------------------------------
	 | Copy Unisharp CKEDITOR
	 |--------------------------------------------------------------------------
	 */
	 gulp.src("/vendor/unisharp/laravel-ckeditor/**")
	 	 .pipe(gulp.dest("resources/assets/unisharp/laravel-ckeditor/"));


	/*
	 |--------------------------------------------------------------------------
	 | Copy Datatables Assets
	 |--------------------------------------------------------------------------
	 */
	// var dtDir = 'vendor/bower_dl/datatables-plugins/integration/';

	// gulp.src("vendor/bower_dl/datatables/media/js/jquery.dataTables.js")
	//    	.pipe(gulp.dest('resources/assets/js/'));

	// gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.css')
	//    	.pipe(rename('dataTables.bootstrap.less'))
	//    	.pipe(gulp.dest('resources/assets/less/others/'));

	// gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.js')
	//    	.pipe(gulp.dest('resources/assets/js/'));

});


/*
 |--------------------------------------------------------------------------
 | Default gulp is to run this elixir laravel function - builds on gulp
 |--------------------------------------------------------------------------
 */
elixir(function(mix) {

	mix.less('admin.less', 'public/assets/css/admin/components/admin-core.css');
	mix.less('admin-skins.less', 'public/assets/css/admin/components/admin-skins.css');
	mix.less('admin-font-icons.less', 'public/assets/css/admin/components/admin-font-icons.css');
	mix.less('bootstrap/bootstrap.less', 'public/assets/css/vendor/bootstrap.css');
	mix.less('widgets/weather-icons-mapping.less', 'resources/assets/css/weather-icons-mapping.css');

	// //COMBINE ADMIN DASHBOARD CSS FILES INTO SINGLE FILE - ADMIN CSS
    mix.styles([
		'public/assets/css/vendor/bootstrap.css',												// BOOTSTRAP CORE INPUT
		'public/assets/css/admin/components/admin-core.css',									// ADMIN LTE CORE INPUT
		'public/assets/css/admin/components/admin-skins.css',									// ADMIN LTE SKINS INPUT
		'public/assets/css/admin/components/admin-font-icons.css',								// ADMIN LTE FONT ICONS INPUT
        'resources/assets/adminlte/plugins/iCheck/square/blue.css',								// ADMINLTE PLUGIN CSS - iCheck
        'resources/assets/adminlte/plugins/morris/morris.css',									// ADMINLTE PLUGIN CSS - Morris chart
        'resources/assets/adminlte/plugins/datatables/dataTables.bootstrap.css',				// ADMINLTE PLUGIN CSS - DataTables
        'resources/assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css',				// ADMINLTE PLUGIN CSS - jvectormap
        'resources/assets/adminlte/plugins/datepicker/datepicker3.css',							// ADMINLTE PLUGIN CSS - Date Picker
        'resources/assets/adminlte/plugins/daterangepicker/daterangepicker-bs3.css',			// ADMINLTE PLUGIN CSS - Daterange picker
		'resources/assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css',	    // ADMINLTE PLUGIN CSS - Bootstrap wysihtml5 text editor
		'resources/assets/weather-icons/css/weather-icons.css',									// ICONS FOR WEATHER PLUGIN
		'resources/assets/weather-icons/css/weather-icons-wind.css',							// WIND DIRECTION ICONS FOR WEATHER PLUGIN
		'resources/assets/css/weather-icons-mapping.css'										// ICONS MAPPING FOR WEATHER PLUGIN TO CSS
    ],
    'public/assets/css/admin/admin.css', './');


    //Dashboard Script
    mix.scripts([
			'js/jquery.js',
			'js/jquery-ui.js',
			'bootstrap/dist/js/bootstrap.js',
			'adminlte/dist/js/app.js',
			'adminlte/plugins/datatables/jquery.dataTables.min.js',
			'adminlte/plugins/datatables/dataTables.bootstrap.min.js',
			'adminlte/plugins/morris/morris.js',
			'adminlte/plugins/sparkline/jquery.sparkline.js',
			'adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
			'adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
			'adminlte/plugins/knob/jquery.knob.js',
			'adminlte/plugins/daterangepicker/moment.min.js',
			'adminlte/plugins/daterangepicker/daterangepicker.js',
			'adminlte/plugins/datepicker/bootstrap-datepicker.js',
			'adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js',
			'adminlte/plugins/slimScroll/jquery.slimscroll.js',
			'adminlte/plugins/fastclick/fastclick.js',
			'adminlte/dist/js/pages/dashboard.js',
			'js/random-class-color.js',
			'js/hideShowPassword.js',
			'js/jquery.simpleWeather.js',
	    ],
		'public/assets/js/admin/admin.js',
		'resources/assets'
	);


	// Pages Scripts
	mix.scripts([
			'js/jquery.js',
			'js/jquery-ui.js',
			'bootstrap/dist/js/bootstrap.js',
			'adminlte/dist/js/app.js',
			'adminlte/plugins/datatables/jquery.dataTables.min.js',
			'adminlte/plugins/datatables/dataTables.bootstrap.min.js',
			'adminlte/plugins/daterangepicker/moment.min.js',
			'adminlte/plugins/daterangepicker/daterangepicker.js',
			'adminlte/plugins/datepicker/bootstrap-datepicker.js',
			'adminlte/plugins/select2/select2.full.min.js',
			'adminlte/plugins/input-mask/jquery.inputmask.js',
			'adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js',
			'adminlte/plugins/input-mask/jquery.inputmask.extensions.js',
			'adminlte/plugins/colorpicker/bootstrap-colorpicker.min.js',
			'adminlte/plugins/timepicker/bootstrap-timepicker.min.js',
			'adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js',
			// 'adminlte/plugins/ckeditor/ckeditor.js',
			'adminlte/plugins/slimScroll/jquery.slimscroll.js',
			'adminlte/plugins/fastclick/fastclick.js',
			'adminlte/plugins/iCheck/icheck.min.js',
			'resources/assets/unisharp/laravel-ckeditor/ckeditor.js',
			'js/random-class-color.js',
			'js/hideShowPassword.js',
			'js/jquery.simpleWeather.js',
			'js/admin/bootbox.min.js',
			'js/admin/pages.js'
	    ],
		'public/assets/js/admin/pages.js',
		'resources/assets'
	);


    // Login CSS and JS
    mix.styles([
		'public/assets/css/vendor/bootstrap.css',												// BOOTSTRAP CORE INPUT
		'public/assets/css/admin/components/admin-core.css',									// ADMIN LTE CORE INPUT
		'public/assets/css/admin/components/admin-skins.css',									// ADMIN LTE SKINS INPUT
		'resources/assets/adminlte/plugins/iCheck/flat/blue.css',								// ADMINLTE PLUGIN CSS - iCheck
		'public/assets/css/admin/components/admin-font-icons.css',								// ADMIN LTE FONT ICONS INPUT
		'resources/assets/adminlte/plugins/iCheck/square/blue.css',
    ],
    'public/assets/css/admin/login.css', './');		

    mix.scripts([
			'js/jquery.js',
			'bootstrap/dist/js/bootstrap.js',
			'resources/assets/adminlte/plugins/iCheck/icheck.min.js',
			'js/hideShowPassword.js',
	    ],
	    'public/assets/js/admin/login.js',
	    'resources/assets'
   	);


    // Frontend Assets
  //   mix.styles([
		// 'public/assets/css/vendor/bootstrap.css',
		// 'resources/assets/css/app.css',
  //   ],
    // 'public/assets/css/app.css', './');	

	// mix.sass('app.scss', 'public/assets/css/app.css');
	mix.scripts([
			'js/jquery.js',
			'js/jquery-migrate-1.2.1.min.js',
			'bootstrap/dist/js/bootstrap.js',
			'js/superfish.js',
			'js/jquery.ui.totop.js',
			'js/jquery.easing.1.3.js',
			'js/jquery.mobile.customized.min.js',
			'js/jquery.ui.totop.js',
			'js/tmstickup.js',
			'js/app.js',
	    ],
	    'public/assets/js/app.js',
	    'resources/assets'
   	);


});



elixir(function(mix) {
    mix.sass('app.scss');
});
elixir(function(mix) {
    mix.sass('login.scss');
});
