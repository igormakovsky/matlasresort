/**
 * Created by m1272 on 27.09.2016.
 */
'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('sass', function () {
    return gulp.src('./scss/main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(cssnano())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css'));
});
gulp.task('sass:watch', function () {
    gulp.watch('./scss/**/*.scss', ['sass']);
});