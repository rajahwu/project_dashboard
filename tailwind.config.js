/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "./public/**/*.{html,js,php}", "./private/shared/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography"), require("daisyui")],
}

