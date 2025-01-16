import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            input: [
                {
                    condition: file => file.includes('resources/lang'),
                    handle: () => callArtisan(findPhpPath(), 'i18n:generate'),
                },
                {
                    condition: file => file.includes('routes/'),
                    handle: () => callArtisan(findPhpPath(), 'routes:generate'),
                },
            ],
        }),
    ],
});
