// Sass configuration
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const prefix = require('gulp-autoprefixer');
const minify = require('gulp-clean-css');
const rename = require('gulp-rename');
const notify = require('gulp-notify');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const size = require('gulp-size');
const webp = require('gulp-webp');
require('dotenv').config();

async function compilescss() {
  return gulp.src('./css/*.scss')
    .pipe(sass())
    .pipe(prefix())
    .pipe(minify())
    .pipe(rename(function (path) {
      return {
        dirname: path.dirname + "",
        basename: path.basename + ".min",
        extname: ".css"
      };
    }))
    .pipe(gulp.dest('./css'))
    .on('end', function(){ notify().write('CSS minificado!'); });
};

async function compilesImg() {
  return gulp.src(['img/*'])
    .pipe(webp())
    .pipe(size())
    .pipe(gulp.dest('img/'));
};

async function compilejs() {
  return gulp.src(['js/jquery-3.5.1.js', 'js/popper.js', 'js/bootstrap.js', 'slick/slick.js', 'js/personalScript.min.js'], { allowEmpty: true })
    .pipe(concat('concat.js'))
    .pipe(gulp.dest('js/'))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(size())
    .pipe(gulp.dest('js/'))
    .on('end', function(){ notify({ message: 'SCRIPT minificado!' }); });
};

async function minifyJS() {
  return gulp.src('js/personalScript.js')
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('js/'));
}

gulp.task('minify-js', minifyJS);

async function compileStylesheetScss() {
  return gulp.src('./css/stylesheet.scss')
    .pipe(sass())
    .pipe(prefix())
    .pipe(minify())
    .pipe(concat('stylesheet.concat.css'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./css'))
    .on('end', function(){ notify().write('stylesheet.scss minificado para stylesheet.concat.min.css!'); });
};

gulp.task('compile-stylesheet', compileStylesheetScss);

gulp.task('watch', function (done) {
  gulp.watch('./css/*.scss', gulp.series('compile-stylesheet', compilescss));
  gulp.watch(['./js/personalScript.js'], gulp.series('minify-js', compilejs));
  done();
});

gulp.task('start', gulp.series('minify-js', 'compile-stylesheet', async function () {
  await compilescss();
  await compilejs();
  await compilesImg();
}));

gulp.task('watch', function (done) {
  gulp.watch('./css/*.scss', compilescss);
  gulp.watch(['./js/personalScript.js'], gulp.series('minify-js', compilejs));
  done();
});

gulp.task('start', gulp.series('minify-js', async function () {
  await compilescss();
  await compilejs();
  await compilesImg();
}));