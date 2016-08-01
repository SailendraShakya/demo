var gulp = require('gulp');
var livereload = require('gulp-livereload')
var uglify = require('gulp-uglifyjs');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var imagemin = require('gulp-imagemin');
var pngquant = require('pngquant');

gulp.task('imagemin', function() {
    console.log('imagemin');
    return gulp.src('/images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{
                removeViewBox: false
            }],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('/images'));
});

gulp.task('test', function() {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('sass', function() {
    console.log('sass');
    return gulp.src('./sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write()).pipe(gulp.dest('./css'))


});


gulp.task('uglify', function() {
    gulp.src('./lib/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./js'))
});
gulp.task('watch', function() {
    // gulp.watch('./sass/**/*.scss', ['sass', 'imagemin', 'uglify']);
    gulp.watch('./lib/**/*.js', ['uglify']);
    gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('default', ['watch']);