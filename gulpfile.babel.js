'use strict';

import browserSync from 'browser-sync';
import connect from 'gulp-connect-php';
import cssnano from 'gulp-cssnano';
import del from 'del';
import gulp from 'gulp';
import gcmq from 'gulp-group-css-media-queries';
import eslint from 'gulp-eslint';
import imagemin from 'gulp-imagemin';
import koutoSwiss from 'kouto-swiss';
import plumber from 'gulp-plumber';
import prefixer from 'autoprefixer-stylus';
import sourcemaps from 'gulp-sourcemaps';
import stylus from 'gulp-stylus';

const reload = browserSync.reload;
const devPaths = {
    js: 'js/**/*',
    css: 'stylus/**/*.styl',
    mainStyl: 'stylus/style.styl',
    img: 'img/**/*'
};
const deployPaths = {
    js: 'js/',
    css: './',
    img: 'img',
    assets: ''
};
// Compile CSS
gulp.task('css', () => {
    gulp.src(devPaths.mainStyl)
        .pipe(plumber())
        //.pipe(sourcemaps.init())
        .pipe(stylus({
            use: [koutoSwiss(), prefixer()],
            compress: false
        }))
        .pipe(gcmq())
        //.pipe(cssnano())
        //.pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(deployPaths.css))
        .pipe(browserSync.stream());
});
// Optimize images
gulp.task('images', () => {
    gulp.src(devPaths.img)
        .pipe(plumber())
        .pipe(imagemin({
            optimizationLevel: 3,
            progressive: true,
            interlaced: true
        }))
        .pipe(gulp.dest(deployPaths.img));
});
// Scripts
gulp.task('lint', () =>
  gulp.src(devPaths.js)
    .pipe(eslint())
    .pipe(eslint.format())
    .pipe(eslint.failAfterError())
);
gulp.task('scripts', () => {
    gulp.src(devPaths.js)
        .pipe(plumber())
        .pipe(gulp.dest(deployPaths.js));
});

gulp.task( 'server', function() {
  browserSync.init({
    // Cambiar el proxy por la ruta que esté escuchando nuestra instalación
    // local de Wordpress
    proxy: 'http://localhost:8888/wordpress'
  });

  // Recargamos el navegador si cualquier archivo .php tiene cambios
  gulp.watch('./**/*.php').on('change', reload);

});

gulp.task('watch', function() {
    gulp.watch('*.php').on('change', reload);
	gulp.watch(devPaths.mainStyl, ['css']);
	gulp.watch(devPaths.img, ['images']);
    gulp.watch(devPaths.js, ['scripts']);
});

gulp.task('default', ['watch', 'server']);