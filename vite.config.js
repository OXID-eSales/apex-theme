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
    esbuild: {
        minifyIdentifiers: false,
    },
    build: {
        minify: 'esbuild',
        sourcemap: true,
        outDir: path.resolve(__dirname, 'out/apex/src'),
        emptyOutDir: true,
        rollupOptions: {
            preserveEntrySignatures: "strict",
            input: {
                scripts: path.resolve(__dirname, 'build/js/scripts.js'),
                styles: path.resolve(__dirname, 'build/scss/style.scss'),

                //Widgets
                oxcountrystateselect: path.resolve(__dirname, 'build/js/widgets/oxcountrystateselect.js'),

                //Detail page scripts
                magnifierlens: path.resolve(__dirname,  'build/js/pages/details/magnifierlens.js'),
                hoverzoom: path.resolve(__dirname, 'build/js/pages/details/hoverzoom.js'),
                modalzoom: path.resolve(__dirname, 'build/js/pages/details/modalzoom.js'),

                variants: path.resolve(__dirname, 'build/js/pages/variants.js'),
                private_sales: path.resolve(__dirname, 'build/js/form/private_sales.js'),
                changeaddress: path.resolve(__dirname, 'build/js/form/changeaddress.js'),
                movetonoticelist: path.resolve(__dirname, 'build/js/pages/checkout/basket/movetonoticelist.js'),
                changeamount: path.resolve(__dirname, 'build/js/pages/checkout/basket/changeamount.js'),
                wrapping: path.resolve(__dirname, 'build/js/pages/checkout/basket/wrapping.js'),
                agb: path.resolve(__dirname, 'build/js/pages/checkout/order/agb.js'),
                payment: path.resolve(__dirname, 'build/js/pages/checkout/payment/payment.js'),
                listremovebutton: path.resolve(__dirname, 'build/js/pages/myaccount/listremovebutton.js')
            },
            output: {
                manualChunks: null,
                entryFileNames: (chunk) => {
                    const nameMap = {
                        oxcountrystateselect: 'widgets/',

                        magnifierlens: 'pages/details/',
                        hoverzoom: 'pages/details/',
                        modalzoom: 'pages/details/'
                    };

                    return nameMap[chunk.name] ? ('js/' + nameMap[chunk.name] + '[name].min.js') : 'js/[name].min.js'; // Fallback for JS
                },
                chunkFileNames: 'js/[name].min.js',
                assetFileNames: 'css/[name].min.[ext]',
            },
        },
    },
});