import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'
import { defineConfig } from 'vite'

export default defineConfig({
    plugins: [
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        laravel([
            'resources/js/app.ts',
            // 'resources/assets/css/style.css',
            'resources/assets/css/bootstrap-grid.css',
            'resources/assets/css/bootstrap-reboot.min.css',
            'resources/assets/css/bootstrap-dropdown.min.css',
            'resources/assets/css/bootstrap-select.min.css',
            'resources/assets/css/font-awesome.css',
            'resources/assets/css/ionicons.min.css',
            'resources/assets/fonts/main-fonts.css',
            'resources/assets/slick/slick.css',
            'resources/assets/slick/slick-theme.css',
            'resources/assets/css/style.css',


            // 'resources/assets/js/jquery-3.3.1.min.js',
            // 'resources/assets/js/bootstrap-dropdown.min.js',
            // 'resources/assets/js/bootstrap-select.min.js',
            // 'resources/assets/slick/slick.js',
            // 'resources/assets/js/slider.js',
            // 'resources/assets/js/common.js',
        ]),
    ]
})
