const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync');
const cleanCss = require('gulp-clean-css');
const autoPrefixer = require('gulp-autoprefixer');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const prod = process.env.NODE_ENV == 'production';

gulp.task('serve', function() {
  browserSync.init({
    proxy: 'http://localhost:8888/wordpress',
    port: 8020,
    open: true
  });
  gulp.watch('src/scss/**/*.scss', gulp.series('style'));
  gulp.watch('src/js/**/*.js', gulp.series('js-watch'));
  gulp.watch('**/*.php').on('change', browserSync.reload);
});

gulp.task('style', function() {
  const pipes = gulp.src('src/scss/style.scss')
    .pipe(sass())
    .pipe(autoPrefixer());
  if (prod) {
    return pipes.pipe(cleanCss()).pipe(gulp.dest('./'));
  }
  return pipes.pipe(gulp.dest('./')).pipe(browserSync.stream());
});

gulp.task('js', function() {
  let pipes = gulp.src('src/js/**/*.js').
    pipe(concat('main.js')).
    pipe(babel({
      presets: ['@babel/env']
    }));
  if (prod) {
    pipes = pipes.pipe(uglify());
  }
  return pipes.pipe(gulp.dest('./'));
});

gulp.task('js-watch', gulp.series('js', function(done) {
  browserSync.reload();
  done();
}));

const tasks = prod ? ['style', 'js'] : ['style', 'js', 'serve'];

gulp.task('default', gulp.series(...tasks));