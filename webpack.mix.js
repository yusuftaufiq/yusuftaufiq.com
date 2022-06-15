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
    .js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss/nesting'),
        require('tailwindcss'),
    ])
    .setPublicPath('source/assets/build')
    .options({
        processCssUrls: false,
    })
    .sourceMaps()
    .version();
