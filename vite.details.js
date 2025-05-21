import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
    build: {
        minify: true,
        sourcemap: true,
        outDir: path.resolve(__dirname, 'out/apex/src'),
        emptyOutDir: false,
        rollupOptions: {
            preserveEntrySignatures: "strict",
            input: {
                magnifierlens: path.resolve(__dirname,  'build/js/pages/details/magnifierlens.js'),
                hoverzoom: path.resolve(__dirname, 'build/js/pages/details/hoverzoom.js'),
                modalzoom: path.resolve(__dirname, 'build/js/pages/details/modalzoom.js'),
            },
            output: {
                manualChunks: null,
                entryFileNames: 'js/pages/details/[name].min.js',
                chunkFileNames: 'js/[name].min.js',
            },
        },
    },
});