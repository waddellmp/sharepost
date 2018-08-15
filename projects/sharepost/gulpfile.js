/**
 * Gulp file to automate the various tasks
 */

var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var csscomb = require('gulp-csscomb');
var cleanCss = require('gulp-clean-css');
var cache = require('gulp-cache');
var cssnano = require('gulp-cssnano');
var del = require('del');
var imagemin = require('gulp-imagemin');
var htmlPrettify = require('gulp-html-prettify');
var gulp = require('gulp');
var gulpIf = require('gulp-if');
var gulpRun = require('gulp-run');
var gulpUtil = require('gulp-util');
var npmDist = require('gulp-npm-dist');
var postcss = require('gulp-postcss');
var runSequence = require('run-sequence');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var useref = require('gulp-useref-plus');
var wait = require('gulp-wait');

// Define paths

var paths = {
    dist: {
        base: 'public',
        img:  'public/img',
        libs: 'public/vendor'
    },
    base: {
        base: './',
        node: 'node_modules'
    },
    src: {
        base: './',
        css:  'app/assets/css/**/*.css',
        img:  'app/assets/img/**/*.+(png|jpg|gif|svg)',
        js:   'app/assets/js/**/*.js',
        vendor: 'app/assets/vendor/**/*',
        scss: 'app/assets/scss/**/*.scss'
    }
}

// Compile SCSS

gulp.task('scss', function() {
  return gulp.src(paths.src.scss)
    .pipe(wait(500))
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([require('postcss-flexbugs-fixes')]))
    .pipe(autoprefixer({
        browsers: ['> 1%']
    }))
    .pipe(csscomb())
    .pipe(gulp.dest(paths.src.base + 'app/assets/css'));
});

// Minify CSS

gulp.task('minify:css', function() {
  return gulp.src([
        paths.src.css
    ])
    .pipe(cleanCss())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(paths.src.base + 'app/assets/css'))
});

// Minify JS

gulp.task('minify:js', function(cb) {
    return gulp.src([
            paths.src.js
        ])
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(paths.src.base + 'app/assets/js'))
});

// Live reload

gulp.task('browserSync', function() {
    browserSync.init({
        server: {
            baseDir: [paths.src.base, paths.base.base]
        },
    })
});

// Watch for changes

gulp.task('watch', ['scss', 'copy:css', 'copy:js'], function() {
    gulp.watch(paths.src.scss, ['scss']);
    gulp.watch(paths.src.js, ['copy:js']);
});

// Clean

gulp.task('clean:dist', function() {
    return del.sync(paths.dist.base + '/assets');
});

// Copy CSS

gulp.task('copy:css', function() {
    return gulp.src([
        paths.src.css
    ])
    .pipe(gulp.dest(paths.dist.base + '/assets/css'))
});

// Copy JS

gulp.task('copy:js', function() {
    return gulp.src([
        paths.src.js
    ])
    .pipe(gulp.dest(paths.dist.base + '/assets/js'))
});

// Copy IMG
gulp.task('copy:img', function() {
    return gulp.src([
        paths.src.img
    ])
    .pipe(gulp.dest(paths.dist.base + '/assets/img'))
});

// Copy Vendor
gulp.task('copy:vendor', function() {
    return gulp.src([
        paths.src.vendor
    ])
    .pipe(gulp.dest(paths.dist.base + '/assets/vendor'))
});

// Build

gulp.task('build', function(callback) {
    runSequence('clean:dist', 'scss', 'minify:css', 'copy:css', 'minify:js', 'copy:js', 'copy:img', 'copy:vendor',
        callback);
});

// Default

gulp.task('default', function(callback) {
    runSequence(['scss', 'watch'],
        callback
    )
});
