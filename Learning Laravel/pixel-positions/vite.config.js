import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        tailwindcss({
            theme: {
                extend: {
                    colors: {
                        black: "#060606",
                    },
                    fontFamily: {
                        "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
                    },
                    fontSize: {
                        "2xs": ".625rem", // 10px
                    },
                },
            },
        }),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),  
    ],
});
