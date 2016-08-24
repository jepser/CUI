var gulp = require('gulp')
var babel = require('gulp-babel')
var sass = require('gulp-sass')
var browserSync = require('browser-sync').create()

var assetsDirectory = './assets/'
var distDirectory = './dist/'

var stylesPath = assetsDirectory + 'styles/**/*.scss'
var jsPath = assetsDirectory + 'js/**/*.js'

gulp.task('watch', function() {
    browserSync.init({
        proxy: "localhost",
        port: 7000
    })

    gulp.watch(stylesPath, ['sass'])
    gulp.watch(jsPath, ['js']).on('change', browserSync.reload)
    gulp.watch(['./**/*.php']).on('change', browserSync.reload)
})

gulp.task('js', function() {
    return gulp.src(jsPath)
        .pipe(babel())
        .pipe(concat('app.js'))
        .pipe(gulp.dest(distDirectory + 'js'))
})

gulp.task('sass', function() {
    return gulp.src(stylesPath)
        .pipe(gulp.sass())
        .pipe(gulp.dest(distDirectory + 'styles'))
})
