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
                sans: ['Inter', 'sans-serif'],
                serif: ['Inter', 'sans-serif'],
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
                'primary': {
                    50: '#E4F1FF',
                    100: '#BFDCFF',
                    200: '#95C7FF',
                    300: '#6BB1FF',
                    400: '#519FFF',
                    500: '#458EFF',
                    600: '#487FFF', // main theme color
                    700: '#486CEA',
                    800: '#4759D6',
                    900: '#4536B6'
                },
                'neutral': {
                    50: '#F5F6FA',
                    100: '#F3F4F6',
                    200: '#EBECEF',
                    300: '#D1D5DB',
                    400: '#9CA3AF',
                    500: '#6B7280',
                    600: '#4B5563',
                    700: '#374151',
                    800: '#1F2937',
                    900: '#111827'
                },
                'danger': {
                    50: '#FEF2F2',
                    100: '#FEE2E2',
                    200: '#FECACA',
                    300: '#FCA5A5',
                    400: '#F87171',
                    500: '#EF4444',
                    600: '#DC2626',
                    700: '#B91C1C',
                    800: '#991B1B',
                    900: '#7F1D1D',
                    main: '#EF4A00',
                    surface: '#FCDAE2',
                    border: '#F9B5C6',
                    hover: '#D53128',
                    pressed: '#801D18',
                    focus: '#ef477026'
                },
                'success': {
                    50: '#F0FDF4',
                    100: '#DCFCE7',
                    200: '#BBF7D0',
                    300: '#86EFAC',
                    400: '#4ADE80',
                    500: '#22C55E',
                    600: '#16A34A',
                    700: '#15803D',
                    800: '#166534',
                    900: '#14532D',
                    main: '#45B369',
                    surface: '#DAF0E1',
                    border: '#B5E1C3',
                    hover: '#009F5E',
                    pressed: '#006038',
                    focus: '#45b36926'
                },
                'warning': {
                    50: '#FEFCE8',
                    100: '#FEF9C3',
                    200: '#FEF08A',
                    300: '#FDE047',
                    400: '#FACC15',
                    500: '#EAB308',
                    600: '#FF9F29',
                    700: '#f39016',
                    800: '#e58209',
                    900: '#d77907',
                    main: '#FF9F29',
                    surface: '#FFF9E2',
                    border: '#FFEBA6',
                    hover: '#D69705',
                    pressed: '#C28800',
                    focus: '#ffc02d26'
                },
                'info': {
                    50: '#EFF6FF',
                    100: '#DBEAFE',
                    200: '#BFDBFE',
                    300: '#93C5FD',
                    400: '#60A5FA',
                    500: '#3B82F6',
                    600: '#2563EB',
                    700: '#1D4ED8',
                    800: '#1E40AF',
                    900: '#1E3A8A',
                    main: '#144BD6',
                    surface: '#E7EEFC',
                    border: '#AECAFC',
                    hover: '#0A51CE',
                    pressed: '#06307C',
                    focus: '#144bd626'
                },
                'cyan': {
                    50: '#ecfeff',
                    100: '#cffafe',
                    200: '#a5f3fc',
                    300: '#67e8f9',
                    400: '#22d3ee',
                    500: '#06b6d4',
                    600: '#00b8f2',
                    700: '#0e7490',
                    800: '#155e75',
                    900: '#164e63',
                },
                'dark': {
                    1: '#1B2431',
                    2: '#273142',
                    3: '#323D4E',
                },
                'lilac': {
                    50: '#f0e1ff',
                    100: '#EBD7FF',
                    600: '#8252E9',
                    700: '#6f37e6',
                    800: '#601eef',
                },
                'light': {
                    50: '#F5F6FA',
                    100: '#F3F4F6',
                    600: '#E4F1FF',
                    700: '#374151',
                    800: '#1F2937',
                },

                // 'cyan': '#00B8F2',
                'indigo': '#7F27FF',
                'purple': '#8252E9',
                'red': '#E30A0A',
                'yellow': '#F4941E',
                'orange': '#F86624',
                'pink': '#DE3ACE',

                // 'primary-light': 'rgba(72, 127, 255, 0.15)',
                'primary-light': '#4B5563',
                'yellow-light': 'rgba(255, 159, 41, 0.15)',
                'purple-light': 'rgba(130, 82, 233, 0.15)',
                'pink-light': 'rgba(250, 54, 230, 0.15)',

                'primary-light-white': 'rgba(72, 127, 255, 0.25)',
                'yellow-light-white': 'rgba(255, 159, 41, 0.25)',
                'purple-light-white': 'rgba(132, 90, 223, 0.25)',
                'pink-light-white': 'rgba(250, 54, 230, 0.25)',
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
            container: {
                center: true,
            },
            screens: {
                'sm': '576px',
                // => @media (min-width: 576px) { ... }

                'md': '768px',
                // => @media (min-width: 768px) { ... }

                'lg': '992px',
                // => @media (min-width: 992px) { ... }

                'xl': '1200px',
                // => @media (min-width: 1200px) { ... }

                '2xl': '1400px',
                // => @media (min-width: 1400px) { ... }

                '3xl': '1650px',
                // => @media (min-width: 1650px) { ... }
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
        require('tailwindcss-animated'),
        plugin(function({ addUtilities, addComponents }) {
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
            addComponents({
                '.container': {
                    maxWidth: '100%',
                    '@screen sm': {
                        maxWidth: '540px',
                    },
                    '@screen md': {
                        maxWidth: '720px',
                    },
                    '@screen lg': {
                        maxWidth: '960px',
                    },
                    '@screen xl': {
                        maxWidth: '1140px',
                    },
                    '@screen 2xl': {
                        maxWidth: '1320px',
                    }
                }
            })
        })
    ],
};
