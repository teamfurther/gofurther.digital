import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/site.scss', 'resources/js/site.js'],
            refresh: true,
        }),
    ],
    publicDir: 'public',
});