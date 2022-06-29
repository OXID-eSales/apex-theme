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
            theme: 'apex',
            dev: './',
            out: './out/',
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
                level: {
                    2: {
                        mergeAdjacentRules: true, // controls adjacent rules merging; defaults to true
                        mergeIntoShorthands: true, // controls merging properties into shorthands; defaults to true
                        mergeMedia: true, // controls `@media` merging; defaults to true
                        mergeNonAdjacentRules: true, // controls non-adjacent rule merging; defaults to true
                        mergeSemantically: false, // controls semantic merging; defaults to false
                        overrideProperties: true, // controls property overriding based on understandability; defaults to true
                        removeEmpty: true, // controls removing empty rules and nested blocks; defaults to `true`
                        reduceNonAdjacentRules: true, // controls non-adjacent rule reducing; defaults to true
                        removeDuplicateFontRules: true, // controls duplicate `@font-face` removing; defaults to true
                        removeDuplicateMediaBlocks: true, // controls duplicate `@media` removing; defaults to true
                        removeDuplicateRules: true, // controls duplicate rules removing; defaults to true
                        removeUnusedAtRules: false, // controls unused at rule removing; defaults to false (available since 4.1.0)
                        restructureRules: false, // controls rule restructuring; defaults to false
                    }
                }
            },
            target: {
                files: {
                    '<%= project.out %><%= project.theme %>/src/css/styles.min.css': ['<%= project.out %><%= project.theme %>/src/css/styles.min.css']
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
//                        '<%= project.dev %>node_modules/bootstrap/js/dist/alert.js',
//                        '<%= project.dev %>node_modules/bootstrap/js/dist/button.js',
//                        '<%= project.dev %>node_modules/bootstrap/js/dist/carousel.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/collapse.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/dropdown.js',
                        '<%= project.dev %>node_modules/bootstrap/js/dist/modal.js',
//                        '<%= project.dev %>node_modules/bootstrap/js/dist/tab.js',
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

        svg_symbols: {
            options: {
                precision: 3
            },
            your_target: {
                files: {
                    '<%= project.dev %>/tpl/icons/repeating-icons.svg': ['<%= project.dev %>build/icons/*.svg'],
                },
            },
        },
        /**
         * Watch files for changes
         */
        watch: {
            sass: {
                files: [
                    '<%= project.dev %>build/scss/**/*.scss','<%= project.dev %>tpl/**/*.tpl'],
                tasks:
                    ['sass', 'cssmin'],
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
                        expand: true,
                        src: [
                            '<%= project.dev %>node_modules/@fontsource/oswald/files/oswald-latin-600-normal.woff*',
                            '<%= project.dev %>node_modules/roboto-fontface/fonts/roboto/Roboto-Regular.woff*'
                        ],
                        flatten: true,
                        dest: '<%= project.out %><%= project.theme %>/src/fonts/'
                    },
                    {
                        expand: false,
                        src: 'bootstrap.bundle.min.js',
                        cwd: '<%= project.dev %>build/js/',
                        dest: '<%= project.out %><%= project.theme %>src/js/'
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
        'copy',
        'svg_symbols',
        'sass',
        'cssmin',
        'concat:js',
        'uglify',
        'clean',
        'watch'
    ]);
};
