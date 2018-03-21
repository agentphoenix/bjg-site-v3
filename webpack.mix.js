let mix = require('laravel-mix')

require('laravel-mix-tailwind')

mix.sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/responsive.scss', 'public/css')
   .sass('resources/assets/sass/hidpi2x.scss', 'public/css')
   .sass('resources/assets/sass/hidpi3x.scss', 'public/css')
   .less('resources/assets/less/tailwind.less', 'public/css')
   .options({ processCssUrls: false })
   .tailwind()
