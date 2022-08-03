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
            'xs': ['.75rem','1.3'],
            'sm': ['.875rem','1.3'],
            'tiny': ['.875rem','1.3'],
            'base': ['1rem','1.3'],
            'lg': ['1.125rem','1.3'],
            'xl': ['1.25rem','1.3'],
            '2xl': ['1.5rem','1.3'],
            '3xl': ['1.875rem','1.3'],
            '4xl': ['2.25rem','1.3'],
            '5xl': ['3rem','1.3'],
            '6xl': ['4rem','1.3'],
            '7xl': ['5rem','1.3'],
          },
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
