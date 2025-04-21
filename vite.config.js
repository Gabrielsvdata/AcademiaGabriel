import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/sass/styles.scss', 'resources/js/app.js'],
      refresh: true,
    }),
    tailwindcss(), // Este plugin é para o Tailwind, caso queira usá-lo também
  ],
});
