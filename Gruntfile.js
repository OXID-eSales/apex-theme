const sass = require('dart-sass');

module.exports = function (grunt) {

    'use strict';

    grunt.initConfig({
        /**
         * Get package meta data
         */
        pkg: grunt.file.readJSON('package.json'),
        /**
         * Set project object
         */
        project: {
            theme: 'moga',
            dev: './',
            out: './../../../out/',
            tmp: './../../../tmp/',
            modules: './../../../modules/'
        },
        /**
         * Clean tmp folders
         */
        clean: {
            options: {
                'force':true,
            },
            src: ['<%= project.tmp %>/*'],
        },
        /**
         * Sass (compile & minify)
         */
        sass: {
            options: {
                implementation: sass,
                sourceMap: false
            },
            compile: {
                files: {
                    '<%= project.out %><%= project.theme %>/src/css/styles.min.css': [
                        '<%= project.dev %>/build/scss/style-opt.scss'
                    ],
                    '<%= project.out %><%= project.theme %>/src/css/styles-all.min.css': [
                        '<%= project.dev %>/build/scss/style.scss'
                    ],
                    '<%= project.out %><%= project.theme %>/src/css/promoslider.min.css': [
                        '<%= project.dev %>/build/scss/promoslider.scss'
                    ]
                }
            }
        },
        cssmin: {
            options: {
                mergeIntoShorthands: true,
                roundingPrecision: -1
            },
            target: {
                files: {
                    '<%= project.out %><%= project.theme %>/src/css/styles.min.css': ['<%= project.out %><%= project.theme %>/src/css/styles.min.css'],
                    '<%= project.out %><%= project.theme %>/src/css/styles-all.min.css': ['<%= project.out %><%= project.theme %>/src/css/styles-all.min.css']
                }
            }
        },
        concat: {
            js: {
                options: {
                    separator: ';\n',
                    sourcemap: false
                },
                files: {
                    '<%= project.out %><%= project.theme %>/src/js/scripts.min.js': [
                        '<%= project.dev %>node_modules/@popperjs/core/dist/umd/popper-lite.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dom/data.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dom/event-handler.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dom/selector-engine.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dom/manipulator.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/base-component.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/alert.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/button.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/carousel.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/collapse.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dropdown.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/modal.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/tab.js',
                        '<%= project.dev %>build/js/main.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/scripts.jq.min.js': [
                        '<%= project.dev %>node_modules/jquery/dist/jquery.slim.js',
                        '<%= project.dev %>node_modules/@popperjs/core/dist/umd/popper-lite.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dom/data.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dom/event-handler.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dom/selector-engine.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dom/manipulator.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/base-component.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/alert.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/button.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/carousel.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/collapse.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dropdown.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/modal.js',
                        '<%= project.dev %>build/js/main.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/scripts.bs.min.js': [
                        '<%= project.dev %>node_modules/bootstrap/dist/js/bootstrap.bundle.js',
                        '<%= project.dev %>build/js/main.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/scripts.bs.jq.min.js': [
                        '<%= project.dev %>node_modules/jquery/dist/jquery.slim.js',
                        '<%= project.dev %>node_modules/bootstrap/dist/js/bootstrap.bundle.js',
                        '<%= project.dev %>build/js/main.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/variants.min.js': [
                        '<%= project.dev %>build/js/pages/variants.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/private_sales.min.js': [
                        '<%= project.dev %>build/js/form/private_sales.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/wrapping.min.js': [
                        '<%= project.dev %>build/js/pages/checkout/basket/wrapping.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/movetonoticelist.min.js': [
                        '<%= project.dev %>build/js/pages/checkout/basket/movetonoticelist.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/agb.min.js': [
                        '<%= project.dev %>build/js/pages/checkout/order/agb.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/payment.min.js': [
                        '<%= project.dev %>build/js/pages/checkout/payment/payment.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/listremovebutton.min.js': [
                        '<%= project.dev %>build/js/pages/myaccount/listremovebutton.js'
                    ],
                    '<%= project.out %><%= project.theme %>/src/js/changeaddress.min.js': [
                        '<%= project.dev %>build/js/form/changeaddress.js'
                    ]
                }
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            my_target: {
                files: {
                    '<%= project.out %><%= project.theme %>/src/js/scripts.min.js': ['<%= project.out %><%= project.theme %>/src/js/scripts.min.js'],
                    '<%= project.out %><%= project.theme %>/src/js/scripts.jq.min.js': ['<%= project.out %><%= project.theme %>/src/js/scripts.jq.min.js'],
                    '<%= project.out %><%= project.theme %>/src/js/scripts.bs.min.js': ['<%= project.out %><%= project.theme %>/src/js/scripts.bs.min.js'],
                    '<%= project.out %><%= project.theme %>/src/js/scripts.bs.jq.min.js': ['<%= project.out %><%= project.theme %>/src/js/scripts.bs.jq.min.js'],
                    '<%= project.out %><%= project.theme %>/src/js/variants.min.js': ['<%= project.out %><%= project.theme %>/src/js/variants.min.js'],
                    '<%= project.out %><%= project.theme %>/src/js/wrapping.min.js': ['<%= project.out %><%= project.theme %>/src/js/wrapping.min.js'],
                    '<%= project.out %><%= project.theme %>/src/js/movetonoticelist.min.js': ['<%= project.out %><%= project.theme %>/src/js/movetonoticelist.min.js'],
                    '<%= project.out %><%= project.theme %>/src/js/agb.min.js': ['<%= project.out %><%= project.theme %>/src/js/agb.min.js'],
                    '<%= project.out %><%= project.theme %>/src/js/payment.min.js': ['<%= project.out %><%= project.theme %>/src/js/payment.min.js'],
                    '<%= project.out %><%= project.theme %>/src/js/listremovebutton.min.js': ['<%= project.out %><%= project.theme %>/src/js/listremovebutton.min.js'],
                    '<%= project.out %><%= project.theme %>/src/js/changeaddress.min.js': ['<%= project.out %><%= project.theme %>/src/js/changeaddress.min.js']
                }
            }
        },
        webfont: {
            icons: {
                src: '<%= project.dev %>/build/icons/*.svg',
                dest: '<%= project.out %><%= project.theme %>/src/fonts/',
                destCss: '<%= project.dev %>/build/scss/',
                options: {
                    relativeFontPath: '../fonts/',
                    fontPathVariables: true,
                    stylesheet: 'scss',
                    fontFamilyName: 'icons',
                    hashes: false,
                    normalize: false,
                    fontFilename: 'icons',
                    types: 'woff,woff2',
                    template: 'build/tasks/templates/custom_webfont.scss'
                }
            }
        },
        cmq: {
            new_filename: {
                options: {
                    beautify: false,
                    expand: false
                },
                src:  '<%= project.out %><%= project.theme %>/src/css/styles.min.css',
                dest: '<%= project.out %><%= project.theme %>/src/css/styles.min.css'
            }
        },
        /**
         * Watch files for changes
         */
        watch: {
            clean: {
                files: [
                    '<%= project.dev %>de/**/*.*','<%= project.dev %>en/**/*.*','<%= project.modules %>**/*.tpl'],
                tasks:
                    ['clean'],
                options:
                    {
                        spawn: false,
                        livereload: true
                    }
            },
            sass: {
                files: [
                    '<%= project.dev %>build/scss/**/*.scss','<%= project.dev %>tpl/**/*.tpl'],
                tasks:
                    ['sass', 'cmq', 'cssmin', 'clean'],
                options:
                    {
                        spawn: false,
                        livereload: true
                    }
            },
            js: {
                files: [
                    '<%= project.dev %>build/js/*.js',
                    '<%= project.dev %>build/js/**/*.js',
                    '<%= project.out %><%= project.theme %>/src/js/*.js'
                ],
                tasks:
                    ['concat:js', 'uglify'],
                options:
                    {
                        spawn: false,
                        livereload: true
                    }
            }
        },
        copy: {
            fonts: {
                files: [
                    {
                        expand: false,
                        src: [
                            '<%= project.dev %>node_modules/fontsource-barlow-condensed/files/barlow-condensed-latin-500-normal.woff*',
                            '<%= project.dev %>node_modules/fontsource-barlow-condensed/files/barlow-condensed-latin-600-normal.woff*',
                            '<%= project.dev %>node_modules/fontsource-barlow-condensed/files/barlow-condensed-latin-700-normal.woff*',
                            '<%= project.dev %>node_modules/fontsource-raleway/files/raleway-latin-200-normal.woff*',
                            '<%= project.dev %>node_modules/fontsource-raleway/files/raleway-latin-400-normal.woff*',
                            '<%= project.dev %>node_modules/fontsource-raleway/files/raleway-latin-700-normal.woff*'
                        ],
                        flatten: true,
                        dest: '<%= project.out %><%= project.theme %>src/fonts/'
                    },
                    {
                        expand: false,
                        src: 'bootstrap.bundle.min.js',
                        cwd: '<%= project.dev %>build/js/',
                        dest: '<%= project.out %><%= project.theme %>src/js/'
                    },
                    {
                        expand: true,
                        cwd: '<%= project.dev %>node_modules/bootstrap/scss/',
                        src: '**',
                        dest: '<%= project.dev %>build/vendor/bootstrap/'
                    }
                ]
            },
        }
    });

    /**
     * Load Grunt plugins
     */
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    /**
     * Default task
     * Run `grunt` on the command line
     */
    grunt.registerTask('default', [
        'webfont',
        'copy',
        'sass',
        'cmq',
        'cssmin',
        'concat:js',
        'uglify',
        'clean',
        'watch'
    ]);
};
