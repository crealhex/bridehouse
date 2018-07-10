const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const pug = require('gulp-pug');

gulp.task('pug', () =>
    gulp.src('./dev/views/*.pug')
        .pipe(pug({
            pretty: true
        }))
        .pipe(gulp.dest('./dist/'))
);

gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: "www.bridehouse.com/dist"
    });

    gulp.watch("dev/scss/**/*.scss", ['sass']);
    gulp.watch('./dev/views/**/*.pug', ['pug'])
        .on('change', browserSync.reload);
});

gulp.task('sass', ()=>
    gulp.src('./dev/scss/*.scss')
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .pipe(autoprefixer({
            versions: 'last 2 versions'
        }))
        .pipe(gulp.dest('./dist/css'))
        .pipe(browserSync.stream())
);

gulp.task('default', ['serve']);