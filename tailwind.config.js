import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                vt323: ['VT323', 'monospace']
            },
            colors: {
                color1: '#FCFAEE',
                color2: '#384B70',
                color3: '#36454F',
                color4: '#507687',
            },

            screens: {
                'phone': '480px',
                'tablet': '860px',
            },
            animation: {
                spin0: 'spin0 1s linear infinite',
                spin360: 'spin360 1s linear infinite',
            },
            keyframes: {
                spin0: {
                    '0%': { transform: 'rotate(360deg)' },
                    '100%': { transform: 'rotate(0deg)' },
                },
                spin360: {
                    '0%': { transform: 'rotate(0deg)' },
                    '100%': { transform: 'rotate(360deg)' },
                },
            },
        },
    },
    plugins: [],
};
