/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            container: {
                center: true, // Center the container horizontally
                padding: '1rem', // Add custom padding
                screens: {
                    sm: '640px',  // Small screens
                    md: '768px',  // Medium screens
                    lg: '1024px', // Large screens
                    xl: '1280px', // Extra-large screens
                    '2xl': '1470px', // 2x Extra-large screens
                },
            },
            colors: {
                // #1F3A65 - Blue
                // #EF1E24 - Red
                "primary": {
                    100: "#e9f0fb",
                    200: "#e0ecff",
                    300: "#caddfa",
                    400: "#b8d5ff",
                    500: "#1F3A65",
                    600: "#113061",
                    // '600': "#ff4040",
                    // '500': "#EF1E24"
                },
                "secondary": {
                    '400': "#ff4040",
                    DEFAULT: "#EF1E24"
                    // '400': "#1F3A65",
                    // DEFAULT: "#113061"
                },
                "gray": "#EDF0FF",
                "gray-light": "#F4F6FF",
                "gray-light-alt": "#B8B8B8",
                "gray-body": "#61657E",
                "gray-title": "#1C1C1C",
            },
            boxShadow: {
                "3xl": "4px 4px 20px rgba(0, 0, 0, 0.1)",
                "card": "0px 0px 36px rgba(0, 0, 0, 0.08)",
                "glow": "4px 4px 15px rgba(31, 58, 101, 0.4)",
            },
            borderRadius: {
                "20": "20px",
                "10": "10px",
                "5": "5px",
            },
            fontFamily: {
                "heading": ["Poppins", "sans-serif"],
                "body": ["DM Sans", "sans-serif"],
            },
        },
    },
    plugins: [],
}

