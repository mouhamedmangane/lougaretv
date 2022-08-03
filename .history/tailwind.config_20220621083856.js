const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        fontSize: {
            'xs': ['.75rem','1.2'],
            'sm': ['.875rem','1.2'],
            'tiny': ['.875rem','1.2'],
            'base': ['1rem','1.2'],
            'lg': ['1.125rem','1.2'],
            'xl': ['1.25rem','1.2'],
            '2xl': ['1.5rem','1.2'],
            '3xl': ['1.875rem','1.2'],
            '4xl': ['2.25rem','1.2'],
            '5xl': ['3rem','1.2'],
            '6xl': ['4rem','1.2'],
            '7xl': ['5rem','1.2'],
          },
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
