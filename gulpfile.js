var gulp = require('gulp'),
	less = require('gulp-less'),
  autoprefixer = require('gulp-autoprefixer');
  //minifyCSS  = require('gulp-minify-css'), 
	//rename = require('gulp-rename'); 

/* Task to compile less */
/*gulp.task('styles',function(){
	return gulp.src('./includes/less/custom/style.less')
		.pipe(less())
		.pipe(autoprefixer())
		.pipe(rename({suffix: '.expanded'}))
    .pipe(gulp.dest('./includes/css/'));
});*/

/* Task to minify css */
/*gulp.task('minify-css', ['styles'], function() {  
  gulp.src('./includes/css/style.expanded.css')
    .pipe(minifyCSS())
    .pipe(rename('style.css'))
    .pipe(gulp.dest('./'));
});*/

/* Task to watch less changes */
//gulp.task('watch', function () {
  //gulp.watch('./includes/less/**/*.less', ['styles']);
  //gulp.watch('./includes/less/**/*.less', ['minify-css']);
//});

/* Task when running `gulp` from terminal */
//gulp.task('default', ['styles', 'minify-css', 'watch']);

/* Task to compile less */
gulp.task('styles',function(){
  return gulp.src('./includes/less/custom/style.less')
    .pipe(less())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./'));
});

/* Task to watch less changes */
gulp.task('watch', function () {
gulp.watch('./includes/less/**/*.less', ['styles']);
});

/* Task when running `gulp` from terminal */
gulp.task('default', ['styles', 'watch']);