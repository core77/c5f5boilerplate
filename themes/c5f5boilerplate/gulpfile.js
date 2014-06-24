'use strict';

// Include Gulp & Tools
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();


// Default task
gulp.task('default', ['compass-dev']);

// Compile Sass Files Expanded
gulp.task('compass-dev', function () {
    gulp.src(['scss/**/*.scss'])
    
    .pipe($.compass({
        config_file: './config.rb',
        css: './',
        sass: 'scss',
        style: 'expanded',
        sourcemap: 'true'
    }))
});


// Compile Sass Files Compressed
gulp.task('compass-deploy', ['clean'] , function () {
    gulp.src(['scss/**/*.scss'])
    
    .pipe($.compass({
        config_file: './config.rb',
        css: './',
        sass: 'scss',
        style: 'compressed'
    }))
});

// Clean some folders and files
gulp.task('clean', function() {
  return gulp.src('./*.css', { read: false }) // much faster
    .pipe($.rimraf());
});
