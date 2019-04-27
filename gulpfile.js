const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');

gulp.task('sass', function () {
  return gulp.src('./sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('./css'));
    
});

gulp.task('babel', () =>
  gulp.src('./babel/script.js')
    .pipe(babel({
      presets: ['env']
    }))
    .pipe(gulp.dest('./js'))
);

gulp.task('default', () =>{
  gulp.watch('./babel/script.js',['babel']);
  gulp.watch('./sass/style.scss',['sass']);
});