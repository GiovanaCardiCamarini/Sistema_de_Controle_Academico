import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', // Certifique-se de que o caminho está correto
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
