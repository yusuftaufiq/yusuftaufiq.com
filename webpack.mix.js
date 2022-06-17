// @ts-check

/**
 * @typedef {import('laravel-mix')} LaravelMix
 */

/**
 * @typedef {Object} Jigsaw
 * @property {() => LaravelMix} jigsaw
 */

/**
 * @type {LaravelMix & Jigsaw}
 */
// @ts-ignore
const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix
    .jigsaw()
    .setPublicPath('source/assets/build')
    .js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
    })
    .sourceMaps()
    .version();
