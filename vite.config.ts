import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

import inertia from './resources/scripts/vite/inertia-layout'

export default defineConfig({
    plugins: [
        inertia(),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        laravel(['resources/scripts/main.ts']),
        {
            name: 'blade',
            handleHotUpdate({file, server}) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    })
                }
            },
        },
    ],
    resolve: {
        alias: {
            '@': '/resources',
        },
    },
    server: {
        hmr: {
            host: 'localhost',
        },
        watch: {
            usePolling: true
        }
    },
    build: {
        chunkSizeWarningLimit: 1600,
    },
})
