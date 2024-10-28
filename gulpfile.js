const { src, dest, parallel } = require("gulp");

// Dependencias IMG
const webp = require("gulp-webp");
const imagemin = require("gulp-imagemin");
const cache = require("gulp-cache");
const avif = require("gulp-avif");

function imagenes( callback ){
    const opciones = {
        optimizationLevel: 3
    };

    src("img/**/*.{png,jpg}")
    .pipe( cache( imagemin( opciones ) ) )
    .pipe( dest("build/img") );

    callback();
}

function versionWebp( callback ){

    const opciones = {
        quality:50
    }

    src("img/**/*.{png,jpg}")
    .pipe( webp( opciones ) )
    .pipe( dest( "build/img" ) )

    callback();
}

function versionAvif( callback ){

    const opciones = {
        quality:50
    }

    src("img/**/*.{png,jpg}")
    .pipe( avif( opciones ) )
    .pipe( dest( "build/img" ) )

    callback();
}

exports.webp = versionWebp;
exports.img = imagenes;
exports.avif = versionAvif;
exports.optimizarImagenes = parallel(imagenes, versionWebp, versionAvif);