var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('styles',function(){
	return gulp.src('./style.css')
		.pipe(autoprefixer())
    	.pipe(gulp.dest('./'));
});

gulp.task('watch', function () {
  gulp.watch('./style.css', ['styles']);
});

gulp.task('default', ['styles', 'watch']);