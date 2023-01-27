/** @type {import('tailwindcss').Config} */
module.exports = {
  //darkMode: 'class',
  content: [
      './storage/framework/views/*.php',
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  theme: {
    extend: {
        backgroundImage: {
            'hero-pattern': "url('/img/omnietlo_test2.jpg')",
        }
    },
  },
  plugins: [require("./plugin")],
}
