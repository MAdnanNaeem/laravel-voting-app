const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            maxWidth: {
             'custom' :'62.5rem',
            },
            spacing: {
              70 : '17.5rem',
              175 : '43.75rem',
            },
            fontSize: {
               xxs: ['0.625rem', {lineHeight:'1rem'}],
            },
            boxShadow: {
              card: '4px 4px 15px 0 rgba(36, 37, 38, 0.08 )',
              dialog: '3px 4px 15px 0 rgba(36, 37, 38, 0.22)',
            },
            colors: {
                current: colors.current,
                transparent: colors.transparent,
                black: colors.black,
                white: colors.white,
                gray: colors.gray,
                'gray-background': '#f7f8fc',
                'blue': '#328af1',
                'blue-hovar': '#279bd',
                'yellow': '#ffc73c',
                'red': '#ec454f',
                'green': '#1aab8b',
                'purple': '#8b60ed',
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],
};
