'use strict';

// = load plugins
//-----------------------------------------------------------------------------//

    var gulp            = require('gulp'),
        sass            = require('gulp-ruby-sass'),
        psi             = require('psi'),
        gulpif          = require('gulp-if'),
        runSequence     = require('run-sequence'),
        cache           = require('gulp-cache'),
        lazypipe        = require('lazypipe'),
        filter          = require('gulp-filter'),
        uglify          = require('gulp-uglify'),
        minifyCss       = require('gulp-minify-css'),
        imagemin        = require('gulp-imagemin'),
        useref          = require('gulp-useref'),
        wiredep         = require('wiredep').stream;


// = assets
//-----------------------------------------------------------------------------//

    gulp.task('fonts', function() {
        return gulp.src('src/fonts/**/*.*')
        .pipe(gulp.dest('dist/fonts/'))
    });


// = styles
//-----------------------------------------------------------------------------//

    gulp.task('styles', function() {
        return gulp.src('src/sass/**/*.scss')
        .pipe(sass({
            style: 'compressed',
            sourcemap: false
        }))
        .on('error', function (err) {console.log(err.message);})
        .pipe(gulp.dest('dist/css/'))
    });


// = js
//-----------------------------------------------------------------------------//

    gulp.task('scripts', function() {
        return gulp.src('src/js/**/*.js')
        .pipe(gulp.dest('dist/js/'))
    });


// = images
//-----------------------------------------------------------------------------//

    gulp.task('images', function() {
        return gulp.src('src/images/**/*')
        .pipe(cache(imagemin({
            progressive: true,
            interlaced: true
        })))
        .pipe(gulp.dest('dist/images/'))
    });


// = clean
//-----------------------------------------------------------------------------//

    gulp.task('clean', require('del').bind(null, ['dist']));


// = tasks
//-----------------------------------------------------------------------------//

    gulp.task('watch', function (cb) {
        runSequence('styles', 'scripts', 'images', 'fonts', cb);
        gulp.watch('src/sass/**/*.scss', ['styles']);
        gulp.watch('src/js/**/*.js', ['scripts']);
        gulp.watch('src/images/**/*', ['images']);
        gulp.watch('src/fonts/**/*', ['fonts']);
    });
