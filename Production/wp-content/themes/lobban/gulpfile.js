// Add gulp.config in same directory as gulpfile
// Add this line to glup.config: { "external_ip":"10.10.10.133" }
// Set correct local IP
// Set hosts file line - 127.0.0.1 lobban.local (or use MAMP etc)

// = Packages
//-----------------------------------------------------------------------------//

    var gulp            = require('gulp'),
        autoprefixer    = require('gulp-autoprefixer'),
        cache           = require('gulp-cache'),
        del             = require('del'),
        imagemin        = require('gulp-imagemin'),
        plumber         = require('gulp-plumber'),
        runSequence     = require('run-sequence'),
        sass            = require('gulp-sass'),
        shell           = require('gulp-shell'),
        uglify          = require('gulp-uglify'),
        minifyCss       = require('gulp-minify-css');
        

// = Global vars
//-----------------------------------------------------------------------------//

    var onError = function (err) {
        console.log(err);
        this.emit('end');
    };


// = clean
//-----------------------------------------------------------------------------//

    gulp.task('clean', function() {
        return del('dist');
    });


// = css
//-----------------------------------------------------------------------------//

    gulp.task('sass', function() {
        return gulp.src('src/sass/**/*.scss')
        .pipe(plumber(onError))
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist/css'));
    });


// = minify css
//-----------------------------------------------------------------------------//

    gulp.task('css-minify', function () {
    gulp.src('src/sass/**/*.scss')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist/css'))
        .pipe(minifyCss())
        .pipe(gulp.dest('dist/css'));
});


// = images
//-----------------------------------------------------------------------------//

    gulp.task('images', function() {
        return gulp.src('src/images/**/*')
        .pipe(cache(imagemin({
            progressive: true,
            interlaced: true,
            svgoPlugins: [{cleanupIDs: false}]
        })))
        .pipe(gulp.dest('dist/images/'));
    });


// = scripts
//-----------------------------------------------------------------------------//

    gulp.task('scripts', function() {
        return gulp.src('src/js/**/*')
        .pipe(gulp.dest('dist/js/'))
    });


// = minify scripts
//-----------------------------------------------------------------------------//

    gulp.task('scripts-minify', function() {
        return gulp.src('src/js/**/*')
            .pipe(uglify())
            .pipe(gulp.dest('dist/js')
        );
    });


// = extras
//-----------------------------------------------------------------------------//

    gulp.task('extras', function () {
        return gulp.src(['src/**/*', '!src/{sass,sass/**}', '!src/{images,images/**}', '!src/{js,js/**}'])
        .pipe(gulp.dest('dist/'));
    });


// = Tasks
//-----------------------------------------------------------------------------//

    gulp.task('default', ['clean'], function() {
        gulp.start('css-minify', 'images', 'scripts-minify', 'extras');
    });

    gulp.task('serve', ['sass', 'images', 'scripts', 'extras'], function() {
        var fs = require("fs");
        var browserSync = require('browser-sync');
        var reload = browserSync.reload;

        browserSync({
            proxy: 'http://lobban.local/',
            notify: false,
            host: '10.0.1.10'
        });

        gulp.watch('_/src/sass/**/*.scss', ['sass', browserSync.reload]);

        gulp.watch('_/src/images/**/*.*', ['images', browserSync.reload]);

        gulp.watch('_/src/js/**/*.js', ['scripts', browserSync.reload]);

        gulp.watch(['src/**/*', '!src/{sass,sass/**}', '!src/{images,images/**}', '!src/{js,js/**}'], ['extras', browserSync.reload]);

        gulp.watch([
            '*.php'
        ]).on('change', browserSync.reload);

    });