import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            'resources/css/libs.min.css',
        'resources/css/socialv006a.css',
        'resources/vendor/flatpickr/dist/flatpickr.min.css',
        'resources/vendor/sweetalert2/dist/sweetalert2.min.css',
        'resources/vendor/vanillajs-datepicker/dist/css/datepicker.min.css',
        'resources/css/customizer.css',
        'resources/css/app.css',
        'resources/js/libs.min.js',
        'resources/vendor/lodash/lodash.min.js',
        'resources/js/setting/utility.js',
        'resources/js/setting/setting.js',
        'resources/js/setting/setting-init.js',
        'resources/js/slider.js',
        'resources/js/masonry.pkgd.min.js',
        'resources/js/enchanter.js',
        'resources/vendor/sweetalert2/dist/sweetalert2.min.js',
        'resources/js/sweet-alert.js',
        'resources/js/customizer.js',
        'resources/js/charts/weather-chart.js',
        'resources/js/app.js',
        'resources/vendor/flatpickr/dist/flatpickr.min.js',
        'resources/js/fslightbox.js',
        'resources/vendor/vanillajs-datepicker/dist/js/datepicker.min.js',
        'resources/js/lottie.js',
        'resources/js/select2.js'
            ],
            refresh: true,
        }),
    ],
});
