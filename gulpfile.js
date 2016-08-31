var gulp = require('gulp')
var babel = require('gulp-babel')
var sass = require('gulp-sass')
var browserSync = require('browser-sync').create()
var concat = require('gulp-concat')
var browserify = require('browserify')
var babelify = require('babelify')
var source = require('vinyl-source-stream')
var buffer = require('vinyl-buffer')

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
  gulp.watch(jsPath, {
    cwd: './'
  }, ['js'])
  gulp.watch(['./**/*.php'], {
    cwd: './'
  }).on('change', browserSync.reload)
})

gulp.task('js', function() {

  var bundler = browserify(assetsDirectory + 'js/main.js')
  
  bundler.transform(babelify)

  bundler.bundle()
    .on('error', function (err) { console.error(err); })
    .pipe(source('app.js'))
    .pipe(buffer())
    .pipe(gulp.dest(distDirectory + 'js'))
    .pipe(browserSync.stream())

  /*return gulp.src(jsPath)
    .pipe(babel({
      presets: ['es2015', 'react']
    }))
    .pipe(browserify({
      insertGlobals: true
    }))
    .pipe(browserify.transform('babelify', {presets: ["es2015", "react"]})
    )
    .pipe(concat('app.js'))
    .pipe(gulp.dest(distDirectory + 'js'))
    .pipe(browserSync.stream())*/
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
