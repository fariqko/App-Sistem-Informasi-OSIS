import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
            colors: {
                primary: "#3b82f6",
                secondary: "#1e40af",
                accent: "#f59e0b",
                dark: "#1e293b",
            },
            animation: {
                float: "float 6s ease-in-out infinite",
                "pulse-slow": "pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite",
                "bounce-slow": "bounce 3s infinite",
                "slideIn": "slideIn 0.5s ease-out",
            },
            keyframes: {
                float: { "0%,100%": { transform: "translateY(0px)" }, "50%": { transform: "translateY(-20px)" } },
                slideIn: { from: { transform: "translateY(20px)", opacity: "0" }, to: { transform: "translateY(0)", opacity: "1" } },
            },
        },
    },

    plugins: [forms],
};
