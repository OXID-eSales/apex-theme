import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
    build: {
        minify: false,
        sourcemap: true,
        outDir: path.resolve(__dirname, 'out/apex/src'),
        emptyOutDir: false,
        rollupOptions: {
            preserveEntrySignatures: "strict",
            input: {
                variants: path.resolve(__dirname, 'build/js/pages/variants.js'),
                private_sales: path.resolve(__dirname, 'build/js/form/private_sales.js'),
                movetonoticelist: path.resolve(__dirname, 'build/js/pages/checkout/basket/movetonoticelist.js'),
                wrapping: path.resolve(__dirname, 'build/js/pages/checkout/basket/wrapping.js'),
                agb: path.resolve(__dirname, 'build/js/pages/checkout/order/agb.js'),
                payment: path.resolve(__dirname, 'build/js/pages/checkout/payment/payment.js'),
                listremovebutton: path.resolve(__dirname, 'build/js/pages/myaccount/listremovebutton.js'),
                changeaddress: path.resolve(__dirname, 'build/js/form/changeaddress.js'),
                changeamount: path.resolve(__dirname, 'build/js/pages/checkout/basket/changeamount.js'),
            },
            output: {
                manualChunks: null,
                entryFileNames: 'js/[name].min.js',
                chunkFileNames: 'js/[name].min.js',
            },
        },
    },
});