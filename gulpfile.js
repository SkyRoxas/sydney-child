(function() {
  'use strict'

  const gulp = require('gulp')
  const watch = require('gulp-watch')
  const webpack = require('webpack-stream')
  const sass = require('gulp-sass')


  const config = {
    src: {
      js: './js/**/*.js',
      sass: './sass/style.sass',
    },
    dest: {
      js: './',
      sass: './css/',
    }
  }

  const minifyJS = function() {
    return gulp.src(config.src.js).pipe(webpack(require('./webpack.config.js'))).pipe(gulp.dest(config.dest.js))
  }

  const minifySASS = function() {
    return gulp.src(config.src.sass).pipe(sass({outputStyle: 'compressed'})).pipe(gulp.dest(config.dest.sass))
  }

  gulp.task('minifyjs', function() {
    minifyJS()
  })

  gulp.task('minifysass', function() {
    minifySASS()
  })

  gulp.task('minify', ['minifyjs', 'minifysass'])

  gulp.task('watch', function() {
    watch([
      config.src.js, config.src.sass
    ], {
      verbose: true
    }, function(event) {
      if (/\.js$/i.test(event.path)) {
        minifyJS()
      } else if (/\.sass$/i.test(event.path)) {
        minifySASS()
      }
    })
  })

    gulp.task('default', ['minify', 'watch'])
})()
