const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: [
    "./**/*.php",
    "./**.php",
    "./*.php",
    "*php",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
      },
    },
    container:{
      center:true,
    }
  },
  plugins: [
    require("daisyui"),
    require('tailwindcss'),
    require('autoprefixer'),
  ],
  
}
