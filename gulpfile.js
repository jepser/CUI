var gulp = require('gulp')
var babel = require('gulp-babel')
var sass = require('gulp-sass')
var browserSync = require('browser-sync').create()
var concat = require('gulp-concat')

var assetsDirectory = './assets/'
var distDirectory = './dist/'

var stylesPath = assetsDirectory + 'styles/**/*.scss'
var jsPath = assetsDirectory + 'js/**/*.js'
var imagesPath = assetsDirectory + 'images/**/*.{png,jpg,svg}'

gulp.task('watch', function() {
    browserSync.init({
        proxy: "localhost",
        port: 7000
    })

    gulp.watch(stylesPath, {
        cwd: './'
    }, ['sass'])
    gulp.watch(jsPath, ['js'], {
        cwd: './'
    }).on('change', browserSync.reload)
    gulp.watch(['./**/*.php'], {
        cwd: './'
    }).on('change', browserSync.reload)
})

gulp.task('js', function() {
    return gulp.src(jsPath)
        .pipe(babel())
        .pipe(concat('app.js'))
        .pipe(gulp.dest(distDirectory + 'js'))
})

gulp.task('sass', function() {
    return gulp.src(stylesPath)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(distDirectory + 'styles'))
        .pipe(browserSync.stream())
})

gulp.task('images', function() {
    return gulp.src(imagesPath)
        .pipe(gulp.dest(distDirectory + 'images'))
})

gulp.task('default', ['sass', 'js', 'images'])
