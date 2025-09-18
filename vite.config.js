import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  base: '/build/', // Указываем базовый путь для статических файлов
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      build: {
        outDir: 'public/build',
        manifest: true,
        assetsDir: 'assets',
      },
      refresh: true,
    }),
    tailwindcss(),
  ],
});