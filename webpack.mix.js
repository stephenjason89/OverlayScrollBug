const mix = require('laravel-mix');
require('vuetifyjs-mix-extension');
require('laravel-mix-workbox');

mix.js('resources/js/app.js', 'public/js').sourceMaps()
    .vuetify('vuetify-loader')
