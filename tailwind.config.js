const colors = require('tailwindcss/colors');

module.exports = {
  darkMode: 'class',
  content: [
    'source/_partials/**/*.blade.php',
    'source/_layouts/**/*.blade.php',
    'source/_components/**/*.blade.php',
    'source/_sections/**/*.blade.php',
    'source/index.blade.php',
  ],
  theme: {
    extend: {
      /**
       * You can change the color of the site by modifying the primary and secondary color options.
       *
       * @see https://tailwindcss.com/docs/customizing-colors#default-color-palette for all available colors
       */
      colors: {
        primary: colors.gray,
        secondary: colors.stone,
      },
      screens: {
        'xs-h': { raw: '(min-height: 600px)' },
      },
    },
  },
};
