/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "primary": "#FE5D14",
                "secondary": "#0E1436",
                "gray": "#EDF0FF",
                "gray-body": "#61657E",
                "gray-title": "#1C1C1C",
            }
        },
    },
    plugins: [],
}

