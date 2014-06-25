'use strict';

// include gulp & tools
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var browserSync = require('browser-sync');
var reload = browserSync.reload;


// default task
gulp.task('default', ['browser-sync']);

// compile sass files expanded
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


// compile sass files compressed
gulp.task('compass-deploy', ['clean'] , function () {
    gulp.src(['scss/**/*.scss'])
    
    .pipe($.compass({
        config_file: './config.rb',
        css: './',
        sass: 'scss',
        style: 'compressed'
    }))
});

// delete some files
gulp.task('clean', function() {
  return gulp.src('./*.css', { read: false }) // much faster
    .pipe($.rimraf());
});


gulp.task('browser-sync', function() {
    browserSync.init(null, {
      proxy: "localhost"
    });

    gulp.watch(['./**/*.php'], reload);
    gulp.watch(['scss/**/*.scss'], ['compass-dev']);
    gulp.watch(['./*.css'], reload);
});
