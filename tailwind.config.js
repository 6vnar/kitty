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
            gridTemplateRows: {
                // Simple 8 row grid
                8: "repeat(8, minmax(0, 1fr))",

                // Complex site-specific row configuration
                layout: "200px minmax(900px, 1fr) 100px",
            },
            height: {
                app: "calc(100vh - 5rem)",
                main: "calc(100vh - 11.625rem)",
            },
            fontFamily: {
                noto: ["Noto Sans Arabic", "sans-serif"],
                NotoKufi: ['Noto Kufi Arabic , sans-serif'],

            },

            //Border Color

            borderColor: {
                gray: {
                    100: "rgba(255,255,255,0.7",
                    200: "rgba(255,255,255,0.5)",
                    300: "rgba(255,255,255,0.3)",
                    400: "#fff",
                    500: "#4ec68e",
                    600: "#3cba7f",
                    700: "#34a26f",
                    800: "#2d8b5f",
                    900: "#25744f",
                },

                pink: {
                    300: "#fb97ac",
                    400: "rgba(251, 111, 146, 1)",
                    500: "rgba(250, 197, 201, 1)",
                    600: "#4b4fad",
                    700: "#3c3f89",
                    800: "#2c2e66",
                    900: "#1d1e42",
                },
            },
            //Website Color

            colors: {
                gray: {
                    100: "rgba(255,255,255,0.7",
                    200: "rgba(255,255,255,0.5)",
                    300: "rgba(255,255,255,0.3)",
                    400: "#fff",
                    400: "#7cd5ac",
                    500: "#4ec68e",
                    600: "#3cba7f",
                    700: "#34a26f",
                    800: "#2d8b5f",
                    900: "#25744f",
                },
                pink: {
                    300: "#fb97ac",
                    400: "rgba(251, 113, 146, 1)",
                    500: "rgb(231,84,128)",
                    500: "#6c6fbf",
                    600: "#4b4fad",
                    700: "#3c3f89",
                    800: "#2c2e66",
                    900: "#1d1e42",
                },
                tertiary: {
                    50: "#f3fae7",
                },

                success: {
                    50: "#e5ebf6",
                },
                error: {
                    100: "#ff0000",
                },
                warning: {
                    100: "#ff0000",
                },
                info: {
                    100: "#ff0000",
                },
                light: {
                    100: "#ff0000",
                },
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
