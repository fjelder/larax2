const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
            },
            transitionProperty: {
                height: "height",
                width: "width",
                spacing: "margin, padding",
            },
            colors: {
                primary: colors.sky,
                secondary: colors.slate,
                extra: colors.red,
            },
            fontSize: {
                xxs: ["8px", "10px"],
            },
            rotate: {
                360: "360deg",
            },
            minHeight: {
                16: "4rem",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("flowbite/plugin"),
    ],
};
