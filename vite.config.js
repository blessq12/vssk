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
                'resources/js/sites/vssk/app.js',
                'resources/sass/sites/vssk/app.sass',
                'resources/js/sites/cleankirov/app.js',
                'resources/js/sites/kovrochist/app.js',
                'resources/sass/sites/kovrochist/app.sass',
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
