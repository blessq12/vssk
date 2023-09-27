import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    css:{
        preprocessorOptions:{
            sass: {
                additionalData: ["@import 'resources/sass/_variables.sass'"]
            }
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.sass',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
