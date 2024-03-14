import defaultTheme from "tailwindcss/defaultTheme";
import colors from "tailwindcss/colors";
// import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter var", ...defaultTheme.fontFamily.sans],
      },
      colors: {
        ...colors,
        background: "var(--background)",
        foreground: "var(--foreground)",
        primary: "var(--primary)",
        border: "var(--border)",
        muted: "var(--muted)",
        destructive: "var(--destructive)",
        success: "var(--success)",
        warning: "var(--warning)",
        "background-contrast": "var(--background-contrast)",
        "foreground-contrast": "var(--foreground-contrast)",
      },
    },
    screens: {
      sm: { min: "320px", max: "599px" },
      md: { min: "600px", max: "1023px" },
      lg: { min: "1024px", max: "1365px" },
      xl: { min: "1366px" },
    },
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/aspect-ratio"),
    require("@tailwindcss/container-queries"),
    require("tailwind-scrollbar"),
    require("@tailwindcss/typography"),
  ],
};
