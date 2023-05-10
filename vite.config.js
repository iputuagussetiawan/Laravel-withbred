import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/scss/app.scss',
                'resources/scss/pages/home.scss',
                'resources/js/app.js',
            ],
            refresh: [
                'routes/**',
                'resources/views/**',
                'resources/js/**',
                'resources/scss/**',
                'public/**'
            ],
        }),
    ],
    resolve:{
        alias:{
            '~bootstrap':path.resolve(__dirname,'node_modules/bootstrap'),
        }
    }
});
