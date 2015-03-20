var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    gulp.src('src/scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', function() {
    gulp.watch(['src/**/*.*'], ['default']);
});
gulp.task('default',['sass']);