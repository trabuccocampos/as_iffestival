'use strict';
// by a.a.T—C Aug 11 2015

var gulp = require('gulp');

// load plugins
var $ = require('gulp-load-plugins')(),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    neat = require('node-neat').includePaths,
    browserSync = require('browser-sync'),
    reload = browserSync.reload,
    gutil = require('gulp-util'),
    filter = require('gulp-filter'),
    plumber = require('gulp-plumber'),
    php = require('gulp-connect-php'),
    concat = require('gulp-concat');

var paths = {
  scss: './app/assets/styles/sass/*.scss',
  js: './app/assets/scripts/**/*.js',
  images: './app/assets/images/*'
};

gulp.task('styles', function(){
    return gulp.src(paths.scss)
    .pipe(plumber(function(error) {
            gutil.log(gutil.colors.red(error.message));
            gutil.beep();
            this.emit('end');
    }))
    .pipe(sourcemaps.init())
    .pipe(sass({
      includePaths: require('node-neat').includePaths.concat(neat)
    }))
    .pipe($.autoprefixer(({
        browsers: ['last 2 versions'],
        cascade: false
    })))
    .pipe(concat('app.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./app/assets/styles/'))
    .pipe(browserSync.stream({match: '**/*.css'}))
    .pipe($.size());
});

gulp.task('styles-build', ['styles'], function () {
    return gulp.src('./app/assets/styles/*.css')
        .pipe($.csso())
        .pipe(concat('app.min.css'))
        .pipe(gulp.dest('./app/assets/styles/build'))
        .pipe(browserSync.stream())
        .pipe($.size());
});

gulp.task('scripts', function(){
    return gulp.src(['./app/assets/scripts/**/*.js', '!./app/assets/scripts/build/**'])
    .pipe($.jshint())
    .pipe($.jshint.reporter(require('jshint-stylish')))
    .pipe(concat('main.min.js'))
    .pipe($.uglify())
    .pipe(gulp.dest('./app/assets/scripts/build'))
    // .pipe(reload({stream:true, once: true}))
    .pipe(browserSync.stream())
    .pipe($.size());
});

gulp.task('images', function () {
    return gulp.src(paths.images)
        .pipe($.cache($.imagemin({
            optimizationLevel: 5,
            progressive: true,
            interlaced: true
        })))
        .pipe(gulp.dest('./app/assets/images/build'))
        // .pipe(reload({stream:true}))
        // .pipe(browserSync.stream())
        .pipe($.size());
});

// gulp.task('fonts', function () {
//     return gulp.src(mainBowerFiles())
//         .pipe($.filter('**/*.{eot,svg,ttf,woff}'))
//         .pipe($.flatten())
//         .pipe(gulp.dest('./dist/assets/fonts'))
//         .pipe($.size());
// });



// gulp.task('content', ['styles-build', 'scripts-build', 'images'], function () {
//     var jsFilter = $.filter('**/*.js');
//     var cssFilter = $.filter('**/*.css');
//
//     return gulp.src('app/**/*.php')
//         .pipe($.useref.assets({searchPath: '{.tmp,app}'}))
//         .pipe(jsFilter)
//         .pipe($.uglify())
//         .pipe(jsFilter.restore())
//         .pipe(cssFilter)
//         .pipe($.csso())
//         .pipe(cssFilter.restore())
//         .pipe($.useref.restore())
//         .pipe($.useref())
//         .pipe(gulp.dest('dist'))
//         .pipe($.size());
// });

// Main Build sequence
// gulp.task('build', ['styles-build', 'scripts-build', 'images']);

gulp.task('default',  function () {
    // gulp.start('build');
    console.log('Please choose build, watch, or serve');
});

gulp.task('php', function() {
    php.server({ base: './app', port: 8010, keepalive: true});
});

gulp.task('serve', ['php', 'styles-build', 'scripts', 'images'], function () {
    browserSync({
        proxy: '127.0.0.1:8010',
        port: 8080,
        open: true,
        notify: false
    });
});


// inject bower components
gulp.task('wiredep', function () {
    var wiredep = require('wiredep').stream;

    gulp.src('./app/assets/styles/**/*.scss')
        .pipe(wiredep({
            directory: '../bower_components'
        }))
        .pipe(gulp.dest('app/assets/styles'));

    gulp.src('./app/**/*.php')
        .pipe(wiredep({
            directory: '../bower_components'
        }))
        .pipe(gulp.dest('./app'));
});

// gulp.task('watch', ['connect', 'serve'], function () {
gulp.task('watch', ['serve'], function () {

    // watch for changes

    gulp.watch([
        'app/**/*.php',
        'app/assets/images/**/*'
        // 'app/content/**/*'
    ], reload);

    gulp.watch('./app/assets/styles/**/**/**/*.scss', ['styles-build']);
    gulp.watch('./app/assets/scripts/**/*.js', ['scripts']);
    gulp.watch('./app/assets/images/**/*', ['images']);
    // gulp.watch('app/content/**/*', ['content']);
    gulp.watch('bower.json', ['wiredep']);
});
