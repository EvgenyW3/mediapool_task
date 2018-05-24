var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function(){
 
    console.log('default gulp task...')
 
});
 
gulp.task('sass', function () {
 
    gulp.src('*.scss')
 
        .pipe(sass())
 
        .pipe(gulp.dest(''));
 
});
 
gulp.task('default', ['sass']);