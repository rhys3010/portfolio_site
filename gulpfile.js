var gulp = require('gulp');
var sass = require('gulp-sass');
var header = require('gulp-header');
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");
var uglify = require('gulp-uglify');
var pkg = require('./package.json');

// Copy third party libraries from /node_modules into./app/vendor
gulp.task('vendor', function() {

  // Bootstrap
  gulp.src([
      './node_modules/bootstrap/dist/**/*',
      '!./node_modules/bootstrap/dist/css/bootstrap-grid*',
      '!./node_modules/bootstrap/dist/css/bootstrap-reboot*'
    ])
    .pipe(gulp.dest('./app/vendor/bootstrap'))

  // Font Awesome
  gulp.src([
      './node_modules/font-awesome/**/*',
      '!./node_modules/font-awesome/{less,less/*}',
      '!./node_modules/font-awesome/{scss,scss/*}',
      '!./node_modules/font-awesome/.*',
      '!./node_modules/font-awesome/*.{txt,json,md}'
    ])
    .pipe(gulp.dest('./app/vendor/font-awesome'))

  // jQuery
  gulp.src([
      './node_modules/jquery/dist/*',
      '!./node_modules/jquery/dist/core.js'
    ])
    .pipe(gulp.dest('./app/vendor/jquery'))

  // jQuery Easing
  gulp.src([
      './node_modules/jquery-easing/*.js'
    ])
    .pipe(gulp.dest('./app/vendor/jquery-easing'))

  // Magnific Popup
  gulp.src([
      './node_modules/magnific-popup/dist/*'
    ])
    .pipe(gulp.dest('./app/vendor/magnific-popup'))

  // Scrollreveal
  gulp.src([
      './node_modules/scrollreveal/dist/*.js'
    ])
    .pipe(gulp.dest('./app/vendor/scrollreveal'))

  // PHPMailer
  gulp.src([
      './vendor/phpmailer/phpmailer/**',

    ])
    .pipe(gulp.dest('./app/vendor/phpmailer/phpmailer'))

  // Autoload
  gulp.src([
    './vendor/autoload.php'
  ])
  .pipe(gulp.dest('./app/vendor'))

  // Composer
  gulp.src([
    './vendor/composer/*'
  ])
  .pipe(gulp.dest('./app/vendor/composer'))

  // dotenv
  gulp.src([
    './vendor/vlucas/phpdotenv/**'
  ])
  .pipe(gulp.dest('./app/vendor/vlucas/phpdotenv'))

});

// Compile SCSS
gulp.task('css:compile', function() {
  return gulp.src('./app/scss/**/*.scss')
    .pipe(sass.sync({
      outputStyle: 'expanded'
    }).on('error', sass.logError))
    .pipe(gulp.dest('./app/css'))
});

// Minify CSS
gulp.task('css:minify', ['css:compile'], function() {
  return gulp.src([
      './app/css/*.css',
      '!./app/css/*.min.css'
    ])
    .pipe(cleanCSS())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./app/css'));
});

// CSS
gulp.task('css', ['css:compile', 'css:minify']);

// Minify JavaScript
gulp.task('js:minify', function() {
  return gulp.src([
      './app/js/*.js',
      '!./app/js/*.min.js'
    ])
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./app/js'));
});

// JS
gulp.task('js', ['js:minify']);

// Default task
gulp.task('default', ['css', 'js', 'vendor']);

// Dev task
gulp.task('dev', ['css', 'js'], function() {
  gulp.watch('./scss/*.scss', ['css']);
  gulp.watch('./js/*.js', ['js']);
});

// Dist Task
gulp.task('dist', function() {
  gulp.src([
      './app/**',
      './app/.*',
      '!./app/css/portfolio-site.css',
      '!./app/js/portfolio-site.js',
      '!./app/scss{,/**}'
    ])
    .pipe(gulp.dest('./dist'))

});
