const gulp = require('gulp');
const runSequence = require('run-sequence');
const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const del = require('del');
var browserSync = require('browser-sync').create();

/*
--Top level functions--
    gulp.task -- Define tasks
    gulp.src -- Point to files to use
    gulp.dest -- Points to the folder to output
    gulp.watch -- watch files

*/

//Copy all files with .php extension & put in correct place
gulp.task('moveFiles', function(){
    gulp.src('src/*.php')
        .pipe(gulp.dest('dist'));

    gulp.src('src/includes/**/*')
        .pipe(gulp.dest('dist/includes'));

    gulp.src('src/fonts/**')
        .pipe(gulp.dest('dist/fonts'))
});

//Optimizes images
gulp.task('imageMin', function(){
    gulp.src('src/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'));
    //Just move svg's over with images
    gulp.src('src/images/icons/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images/icons'));
});

//minify js
gulp.task('uglify', function(){
    gulp.src('src/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
});

//concat css
gulp.task('copyCss', function(){
    gulp.src('src/css/*.css')
        .pipe(gulp.dest('dist/css'));
});

//Delete everything in the dist file so it can be re-written
gulp.task('clean', function () {
  return del([
    'dist/*/**'
  ]);
});

//runSequnce I had to install to keep scripts from running simultaniously
gulp.task('default', function(callback) {
    runSequence('clean',['copyCss','moveFiles', 'imageMin','uglify'],callback);
});

gulp.task('sync', function() {
    gulp.watch('src/*.php',['moveFiles']);
    gulp.watch('src/includes/*.php',['moveFiles']);
    gulp.watch('src/fonts/**',['moveFiles']);
    gulp.watch('src/images/*', ['imageMin']);
    gulp.watch('src/css/*.css', ['copyCss']);
    browserSync.init({
        proxy: "http://localhost:8888/1portfolio/dist/",
        files: "*.css,*.php,css/*css"
    });
});

//Note Uglify will not happen when watching
gulp.task('watch', function(){
    gulp.watch('src/*.php',['moveFiles']);
    gulp.watch('src/includes/*.php',['moveFiles']);
    gulp.watch('src/fonts/**',['moveFiles']);
    gulp.watch('src/images/*/**', ['imageMin']);
    gulp.watch('src/css/*.css', ['copyCss']);

});
