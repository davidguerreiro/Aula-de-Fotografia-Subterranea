var gulp = require('gulp');

// Requires the gulp-sass plugin
var sass = require('gulp-sass');


// compile sass.
gulp.task('sass', function(){
    return gulp.src('css/style.scss')
      .pipe(sass()) // Converts Sass to CSS with gulp-sass
      .pipe(gulp.dest('css') );
  });

  // Gulp watch syntax.
gulp.task('watch', function(){
    gulp.watch('css/**/*.scss', ['sass']);
    // Other watchers
  })