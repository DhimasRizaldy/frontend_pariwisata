const gulp = require('gulp');
const concat = require('gulp-concat');
const minify = require('gulp-minify');

// Tugas untuk menggabungkan file CSS
gulp.task('css', function () {
    return gulp.src('resources/css/*.css') // Ganti dengan path file CSS Anda
        .pipe(concat('all.css')) // Nama file output
        .pipe(gulp.dest('public/css')); // Folder output
});

// Tugas untuk menggabungkan dan meng-minifikasi file JS
gulp.task('js', function () {
    return gulp.src('resources/js/*.js') // Ganti dengan path file JS Anda
        .pipe(concat('all.js')) // Nama file output
        .pipe(minify()) // Minifikasi file JS
        .pipe(gulp.dest('public/js')); // Folder output
});

// Tugas default yang dijalankan saat menjalankan perintah 'gulp' tanpa argumen
gulp.task('default', gulp.series('css', 'js'));
