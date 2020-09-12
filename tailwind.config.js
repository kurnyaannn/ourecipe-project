const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],
    theme: {
        extend: {
            height: {
              80: '24rem',
              90: '32rem',
              100: '36rem',
            },
          },
          fontFamily: {
            lora: 'Lora',
            nunito: 'Nunito',
          },
    },
    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },
    plugins: [require('@tailwindcss/ui')],
};
