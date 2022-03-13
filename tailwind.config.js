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
                // 4: "repeat(4, minmax(0, 550px))",
                // 3: "repeat(3, minmax(0, 500px))",
                // 2: "repeat(2, minmax(0, 500px))",
                // 1: "repeat(1, minmax(0, 630px))",
              },
              gridTemplateRows: {
                "auto-fit": "repeat(auto-fit, minmax(0, 1fr))",
                "auto-fill": "repeat(auto-fill, minmax(0, 1fr))",
              },
              colors: {
                TextPrimary: "#F8F9FA",
                TextSecondary: "black",
                Primary: "#212529",
              },
              aspetRatio: {
                "0.5/0.5": "0.5/0.5",
              },
        },
    },

    plugins: [require('@tailwindcss/forms'),],
};
