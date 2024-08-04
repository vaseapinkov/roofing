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
                "primary": {
                    100: "#FFF3ED",
                    200: "#FFEFE7",
                    300: "#FDDDCE",
                    400: "#FFDAC9",
                    500: "#FE5D14",
                },
                "secondary": {
                    '400': "#161C49",
                    DEFAULT: "#0E1436"
                },
                "gray": "#EDF0FF",
                "gray-light": "#F4F6FF",
                "gray-body": "#61657E",
                "gray-title": "#1C1C1C",
            },
            boxShadow: {
                "3xl": "4px 4px 20px rgba(0, 0, 0, 0.1)",
                "card": "0px 0px 36px rgba(0, 0, 0, 0.08)",
                "glow": "4px 4px 15px rgba(254, 93, 20, 0.4)",
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

