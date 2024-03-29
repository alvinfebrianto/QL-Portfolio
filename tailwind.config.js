const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                primary: "Playfair Display",
                body: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "light-primary": "#FAF1E6",
                "light-secondary": "#FDFAF6",
                "light-tail-100": "#A9DED2",
                "light-tail-500": "#54BAB9",
                "dark-primary": "#050402",
                "dark-secondary": "#1C1D24",
                "dark-navy-100": "#07567D",
                "dark-navy-500": "#292D42",
                accent: { DEFAULT: "#AC6B34", hover: "#925A2B" },
                paragraph: "#878E99",
                blue: colors.blue,
                indigo: colors.indigo,
                green: colors.green,
                red: colors.red,
            },
        },
        container: {
            padding: { DEFAULT: "1rem", lg: "3rem" },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
