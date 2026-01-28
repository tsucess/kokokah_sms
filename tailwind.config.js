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
        // Primary color - Dark Teal
        primary: {
          DEFAULT: '#004A53',
          50: '#E6F2F3',
          100: '#CCE5E7',
          200: '#99CBCF',
          300: '#66B1B7',
          400: '#33979F',
          500: '#004A53',
          600: '#003B42',
          700: '#002C32',
          800: '#001E21',
          900: '#000F11',
        },
        // Accent color - Golden Yellow
        accent: {
          DEFAULT: '#FDAF22',
          50: '#FFF9E6',
          100: '#FFF3CC',
          200: '#FFE799',
          300: '#FFDB66',
          400: '#FFCF33',
          500: '#FDAF22',
          600: '#CA8C1B',
          700: '#976914',
          800: '#64460E',
          900: '#322307',
        },
        // Secondary color - Orange
        secondary: {
          DEFAULT: '#F56824',
          50: '#FEF2ED',
          100: '#FDE5DB',
          200: '#FBCBB7',
          300: '#F9B193',
          400: '#F7976F',
          500: '#F56824',
          600: '#C4531D',
          700: '#933E16',
          800: '#622A0E',
          900: '#311507',
        },
        // Background color
        background: '#F7F7FA',
      },
      fontFamily: {
        fredoka: ['Fredoka', 'sans-serif'],
        'fredoka-one': ['Fredoka One', 'cursive'],
        sitka: ['Sitka', 'Georgia', 'serif'],
      },
    },
  },
  plugins: [],
}

