const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
<<<<<<< HEAD
      "./src/**/*.{html,js}",
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
=======
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
>>>>>>> a6ee41003971d12ed5fc2a825c4dbaf7c882239f
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

<<<<<<< HEAD
    plugins: [
      require('@tailwindcss/forms'),
      require('autoprefixer'),
      require('postcss-import'),
    ],
=======
    plugins: [require('@tailwindcss/forms')],
>>>>>>> a6ee41003971d12ed5fc2a825c4dbaf7c882239f
};
