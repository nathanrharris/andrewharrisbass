//load plugins
var gulp           = require('gulp'),
	compass          = require('gulp-compass'),
	autoprefixer     = require('gulp-autoprefixer'),
	minifycss        = require('gulp-minify-css'),
	uglify           = require('gulp-uglify'),
	rename           = require('gulp-rename'),
	concat           = require('gulp-concat'),
	notify           = require('gulp-notify'),
	livereload       = require('gulp-livereload'),
	plumber          = require('gulp-plumber'),
	path             = require('path');

var notifyInfo = {
	title: 'Gulp',
	icon: path.join(__dirname, 'gulp.png')
};

//error notification settings for plumber
var plumberErrorHandler = { errorHandler: notify.onError({
		title: notifyInfo.title,
		icon: notifyInfo.icon,
		message: "Error: <%= error.message %>"
	})
};

//styles
gulp.task('styles', function() {
	return gulp.src(['scss/*.scss'])
		.pipe(plumber(plumberErrorHandler))
		.pipe(compass({
			css: 'css',
			sass: 'scss',
			image: 'images'
		}))
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(gulp.dest('css'))
		.pipe(rename({ suffix: '.min' }))
		.pipe(minifycss())
		.pipe(gulp.dest('css'))
    .pipe(livereload());
});

//scripts
gulp.task('scripts', function() {
	return gulp.src('js/*.js')
		.pipe(plumber(plumberErrorHandler))
		.pipe(concat('scripts.min.js'))
		.pipe(gulp.dest('js'))
		.pipe(uglify())
		.pipe(gulp.dest('js'))
    .pipe(livereload());
});

//watch
gulp.task('watch', function() {
	livereload.listen();

	//watch .scss files
	gulp.watch('scss/*.scss', gulp.series('styles'));

	gulp.watch('scss/components/_*.scss', gulp.series('styles'));

	//watch .js files
	//gulp.watch('js/*.js', gulp.series('scripts'));
});
