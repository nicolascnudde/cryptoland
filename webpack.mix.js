// webpack.mix.js

let mix = require("laravel-mix");

mix.sass("assets/sass/main.scss", "").setPublicPath("dist");
