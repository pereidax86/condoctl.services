import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/js/app.js',
                    'node_modules/material-dashboard/assets/js/material-dashboard.js',
                    'node_modules/material-dashboard/assets/css/material-dashboard.css',
            ],
            refresh: true,
        }),
    ],
});
