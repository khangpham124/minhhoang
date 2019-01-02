var gulp = new require('gulp');
var browserSync = new require('browser-sync');
var reload = browserSync.reload;
var sass = new require('gulp-sass');
var cssmin = new require('gulp-cssmin');
var rename = new require('gulp-rename');

gulp.task('sass', function() {
    return gulp.src('./sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
        .pipe(browserSync.stream());
});

gulp.task('serve', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });

    gulp.watch('./sass/*.scss', ['sass']);
    gulp.watch('*.html').on('change', reload);
});