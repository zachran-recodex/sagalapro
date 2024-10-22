import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        'node_modules/flowbite/**/*.js'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'sagala': {
                    '50': '#f3f8fc',
                    '100': '#e6f1f8',
                    '200': '#c8e1ef',
                    '300': '#98c7e1',
                    '400': '#61aacf',
                    '500': '#3c90bb',
                    '600': '#2a6f97',
                    '700': '#245d80',
                    '800': '#224f6a',
                    '900': '#214259',
                    '950': '#162b3b',
                },
                'sagala-opt': {
                    '50': '#f6f6f6',
                    '100': '#efefef',
                    '200': '#dcdcdc',
                    '300': '#bdbdbd',
                    '400': '#989898',
                    '500': '#7c7c7c',
                    '600': '#656565',
                    '700': '#525252',
                    '800': '#464646',
                    '900': '#3d3d3d',
                    '950': '#292929',
                },
            },
            animation: {
                'infinite-scroll': 'infinite-scroll 50s linear infinite',
            },
            keyframes: {
                'infinite-scroll': {
                    from: { transform: 'translateX(0)' },
                    to: { transform: 'translateX(-100%)' },
                }
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
        require('tailwindcss-animated'),
        plugin(function({ addUtilities }) {
            addUtilities({
                '.py-main': {
                        paddingTop: '2rem',
                        paddingBottom: '2rem',
                    '@screen sm': {
                        paddingTop: '3rem',
                        paddingBottom: '3rem',
                    },
                    '@screen lg': {
                        paddingTop: '4rem',
                        paddingBottom: '4rem',
                    }
                },
                '.container-main': {
                    '@apply container mx-auto px-4 sm:px-6 lg:px-8': {},
                },
                '.text-title': {
                    '@apply text-3xl sm:text-4xl font-normal mb-4': {},
                },
                '.text-title-8': {
                    '@apply text-3xl sm:text-4xl font-normal mb-8': {},
                },
                '.text-desc': {
                    '@apply text-xl sm:text-2xl text-justify font-light mb-4': {},
                },
            });
        })
    ],
};
