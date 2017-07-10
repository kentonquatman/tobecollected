// GULP

var gulp   = require('gulp');
var sass   = require('gulp-ruby-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// SASS

gulp.task('sass', function () {
  return sass('_assets/sass/style.scss', {style: 'compressed'})
    .pipe(gulp.dest('_assets/css'));
});

// JAVASCRIPT

gulp.task('ieScripts', function() {
	return gulp.src([
		'_assets/js/_src/respond.js',
		'_assets/js/_src/selectivizr.js'
	])
	.pipe(concat('ie-scripts.js'))
	.pipe(uglify())
	.pipe(gulp.dest('_assets/js'));
});

// WATCH

gulp.task('watch', function() {
  gulp.watch('_assets/sass/**/*.scss', ['sass']);
});

// DEFAULT TASK

gulp.task('default',[
	'sass',
	'watch'
]);