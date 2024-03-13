import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';
// import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans]
             },
            colors: {
                ...colors,
                'background':'#fff',
                'foreground':'#030712',
                'primary': '#ff2d20',
                'border': '#e5e7eb',
                'muted': '#9ca3af',
                'destructive': '#dc2626',
                'success': '#22c55e',
                'warning': '#fb923c',
                'background-contrast': '#111827',
                'foreground-contrast':'#fff'
            }
        },
        screens: {
            'sm': { 'min': '320px', 'max': '599px' },
            'md': { min: '600px', 'max': '1023px' },
            'lg': { 'min': '1024px', 'max': '1365px' },
            'xl': { 'min': '1366px' }
        },

    },
    plugins: [

        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/container-queries'),
        require('tailwind-scrollbar'),
        require('@tailwindcss/typography'),
    ],
};
