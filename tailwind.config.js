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
      screens: {
        'xs-h': { raw: '(min-height: 600px)' },
      },
    },
  },
};
