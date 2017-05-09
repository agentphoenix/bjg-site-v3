const { mix } = require('laravel-mix')

mix.sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/responsive.scss', 'public/css')
   .sass('resources/assets/sass/hidpi2x.scss', 'public/css')
   .sass('resources/assets/sass/hidpi3x.scss', 'public/css')
   .options({ processCssUrls: false })
