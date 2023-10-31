/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                della: ["Della Respira", "serif"],
                karma: ["Karma", "serif"],
                mirza: ["Mirza", "serif"],
                playfair: ["Playfair Display", "serif"],
                poppins: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [require("tw-elements/dist/plugin.cjs"), require("daisyui")],

    daisyui: {
        themes: ["light"], // true: all themes | false: only light + dark | array: specific themes like this ["light", "dark", "cupcake"]
    },
};
