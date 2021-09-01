const mix = require('laravel-mix');
let minifier = require('minifier');
require('laravel-mix-polyfill');

mix.options({
    processCssUrls: false
});

mix.js('src/js/main.js', 'assets/js/')
    .sass('src/sass/app.scss', 'assets/css/')
    .options({
        postCss: [
            require('autoprefixer')({
                "overrideBrowserslist": [
                    "> 1%",
                    "ie >= 8",
                    "edge >= 15",
                    "ie_mob >= 10",
                    "ff >= 45",
                    "chrome >= 45",
                    "safari >= 7",
                    "opera >= 23",
                    "ios >= 7",
                    "android >= 4",
                    "bb >= 10"
                ],
                grid: true
            })
        ]
    })
    .sourceMaps(true, 'source-map')
    .polyfill({
        enabled: true,
        useBuiltIns: "usage",
        corejs: 2,
        targets: "firefox 50, IE 11"
    });

mix.then(() => {
    minifier.minify('assets/css/app.css')
    minifier.minify('assets/js/main.js')
});