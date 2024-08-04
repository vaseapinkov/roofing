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
                "primary": {
                    100: "#FFF3ED",
                    200: "#FFEFE7",
                    300: "#FDDDCE",
                    400: "#FFDAC9",
                    500: "#FE5D14",
                },
                "secondary": "#0E1436",
                "gray": "#EDF0FF",
                "gray-body": "#61657E",
                "gray-title": "#1C1C1C",
            },
            boxShadow: {
                "3xl": "4px 4px 20px rgba(0, 0, 0, 0.1)",
                "card": "0px 0px 36px rgba(0, 0, 0, 0.08)",
            },
            "borderRadius": {
                "10": "10px",
            },
        },
    },
    plugins: [],
}

