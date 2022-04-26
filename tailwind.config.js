const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        colors: {
            ...colors,
        },
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1200px",
            "2xl": "1200px"
        },
        maxHeight: {
            "860-px": "860px",
        },
        container: {
            center: true,
            padding: "2rem"
        },
        boxShadow: {
            sm: "0 1px 2px 0 rgba(0, 0, 0, 0.05)",
            DEFAULT: "0px 2px 4px rgba(148, 163, 184, 0.05), 0px 6px 24px rgba(235, 238, 251, 0.4)",
            md: "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)",
            lg: "0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)",
            xl: "0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)",
            "2xl": "0 25px 50px -12px rgba(0, 0, 0, 0.25)",
            "3xl": "0 35px 60px -15px rgba(0, 0, 0, 0.3)",
            inner: "inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)",
            none: "none"
        },
        extend: {
            colors: {
                white: "#ffffff",
                body: "#1e293b",

                "blueGray-50": "#f8fafc",
                "blueGray-100": "#f1f5f9",
                "blueGray-200": "#e2e8f0",
                "blueGray-300": "#cbd5e1",
                "blueGray-400": "#94a3b8",
                "blueGray-500": "#64748b",
                "blueGray-600": "#475569",
                "blueGray-700": "#334155",
                "blueGray-800": "#1e293b",
                "blueGray-900": "#0f172a",
                'theme-color': '#361CC1',
                'theme-color-2': '#FE7A7B'
            },

            inset: {
                '100': '100%',
            },
            padding: {
                '120': '120px',
            },
        }
    },


    plugins: [require('@tailwindcss/forms'),
        require('flowbite/plugin'),
        require('@tailwindcss/typography')],

};
