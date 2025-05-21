import { defineConfig } from 'vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import path from 'path';
import autoprefixer from 'autoprefixer';

export default defineConfig({
    plugins: [
        viteStaticCopy({
            targets: [
                //bootstrap
                { src: path.resolve(__dirname, 'node_modules/bootstrap/dist/js/bootstrap.min.js'), dest: 'js' },
                { src: path.resolve(__dirname, 'node_modules/bootstrap/dist/js/bootstrap.bundle.min*'), dest: 'js' },

                //fonts
                { src: path.resolve(__dirname, 'node_modules/@fontsource/oswald/files/oswald-latin-600-normal.woff*'), dest: 'fonts' },
                { src: path.resolve(__dirname, 'node_modules/roboto-fontface/fonts/roboto/Roboto-Regular.woff*'), dest: 'fonts' },
            ],
        }),
    ],
    css: {
        preprocessorOptions: {
            less: {
                javascriptEnabled: true,
            },
            scss: {
                api: 'modern'
            },
            css: {
                postcss: {
                    plugins: [
                        autoprefixer({ overrideBrowserslist: ['last 2 versions'] })
                    ],
                    map: false, // Disable source maps for faster build
                }
            }
        },
    },
    build: {
        minify: true,
        sourcemap: true,
        outDir: path.resolve(__dirname, 'out/apex/src'),
        emptyOutDir: false,
        rollupOptions: {
            preserveEntrySignatures: "strict",
            input: {
                scripts: path.resolve(__dirname, 'build/js/scripts.js'),
                styles: path.resolve(__dirname, 'build/scss/style.scss'),
            },
            output: {
                manualChunks: null,
                entryFileNames: 'js/[name].min.js',
                chunkFileNames: 'js/[name].min.js',
                assetFileNames: 'css/[name].min.[ext]',
            },
        },
    },
});