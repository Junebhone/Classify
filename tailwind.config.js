const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            gridTemplateColumns: {
                "auto-fit": "repeat(auto-fit, minmax(0, 370px))",
                "auto-fit-2": "repeat(auto-fit, minmax(0, 450px))",
                "auto-fit-3": "repeat(auto-fit, minmax(0, 500px))",
                "auto-fill": "repeat(auto-fill, 290px)",
              },
              gridTemplateRows: {
                "auto-fit": "repeat(auto-fit, minmax(0, 1fr))",
                "auto-fill": "repeat(auto-fill, minmax(0, 1fr))",
              },
              colors: {
                TextPrimary: "#F8F9FA",
                TextSecondary: "black",
                Primary: "#212529",
                Rose:"#FF385C",
                Rose:"#FF385C",
                Rose:"#FF385C",
                'black-rgba':"rgba(0, 0, 0, 0.2)",

              },
              aspetRatio: {
                "0.5/0.5": "0.5/0.5",
              },
        },
    },

    plugins: [require('@tailwindcss/forms'),require('tailwind-scrollbar'),require('tailwind-scrollbar-hide')],
};
