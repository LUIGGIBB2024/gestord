import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({

    build: {
        manifest: true,
      },

    build: {
        manifest: true, // Asegura que se genere el manifest.json
        outDir: 'public/build', // Define la carpeta de salida
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
            },
        },
    },  

    plugins: [
        laravel({            
            input: ['resources/css/app.css', 'resources/js/app.js'],
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
});
