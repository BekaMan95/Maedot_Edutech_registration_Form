/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./**/*.php"],
  theme: {
    screens: {
      "5xs": "320px",
      // => @media (min-width: 320px) { for iphone 5 }

      "4xs": "360px",
      // => @media (min-width: 320px) { for Samsung phone }

      "3xs": "380px",
      // => @media (min-width: 380px) { ... }

      "2xs": "420px",
      // => @media (min-width: 380px) { ... }

      xs: "512px",
      // => @media (min-width: 512px) { ... }

      sm: "640px",
      // => @media (min-width: 640px) { ... }

      md: "768px",
      // => @media (min-width: 768px) { ... }
      mdx: "800px",
      // => @media (min-width: 800px) { ... }
      mdxx: "850px",
      // => @media (min-width: 850px) { ... }

      lg: "1024px",
      // => @media (min-width: 1024px) { ... }

      xl: "1280px",
      // => @media (min-width: 1280px) { ... }

      "2xl": "1536px",
      // => @media (min-width: 1536px) { ... }

      "3xl": "1600px",
      // => @media (min-width: 1600px) { ... }

      "4xl": "1920px",
      // => @media (min-width: 1920px) { ... }
    },
    extend: {
      colors: {
        primary: {
          '50': '#edfaff',
          '100': '#d7f1ff',
          '200': '#b7e9ff',
          '300': '#86ddff',
          '400': '#4cc7ff',
          '500': '#23a9ff',
          '600': '#0c8bff',
          '700': '#056ee7',
          '800': '#0c5bc1',
          '900': '#104f98',
          '950': '#0f315c',
        },
        secondary: {
          '50': '#fff9ec',
          '100': '#fff3d3',
          '200': '#ffe3a5',
          '300': '#ffcd6d',
          '400': '#ffab32',
          '500': '#ff900a',
          '600': '#ff7800',
          '700': '#cc5702',
          '800': '#a1430b',
          '900': '#82390c',
          '950': '#461a04',
        }
      }
    },
  },
  plugins: [],
};
