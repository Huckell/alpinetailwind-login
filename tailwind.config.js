/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
    darkMode: 'class',
      theme: {
        extend: {
          fontFamily: {
            sans: ['Graphik', 'sans-serif'],
            serif: ['Merriweather', 'serif'],
          },
        },
      },
    plugins: []
}