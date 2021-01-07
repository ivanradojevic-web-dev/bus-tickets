const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            // Build your palette here
            gray: colors.blueGray,   
            orange: colors.orange,
            white: colors.white, 
            green: colors.cyan,
            red: colors.pink, 
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/forms'),
    ],
};
