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
                oxcountrystateselect: path.resolve(__dirname, 'build/js/widgets/oxcountrystateselect.js'),
            },
            output: {
                manualChunks: null,
                entryFileNames: 'js/widgets/[name].min.js',
                chunkFileNames: 'js/[name].min.js',
            },
        },
    },
});