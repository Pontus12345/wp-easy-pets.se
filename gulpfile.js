var gulp = require('gulp');

/*
* Requires the gulp plugins
*/

var concat = require('gulp-concat');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

gulp.task('sass', function(){
  return gulp.src('./wp-content/themes/easy-pets.se/assets/sass/**/*.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('./wp-content/themes/easy-pets.se/css'));
});

gulp.task('watch', function(){
  gulp.watch('./wp-content/themes/easy-pets.se/assets/sass/**/*.scss', ['sass']);
  gulp.watch('./wp-content/themes/easy-pets.se/assets/js/**/*.js', ['scripts']);
});

gulp.task('scripts', function () {
    gulp.src('./wp-content/themes/easy-pets.se/assets/js/**/*.js')
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./wp-content/themes/easy-pets.se/js'));
});