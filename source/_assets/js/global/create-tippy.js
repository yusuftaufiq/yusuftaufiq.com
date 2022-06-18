// @ts-check

import tippy from 'tippy.js';
import 'tippy.js/dist/tippy.css';
import 'tippy.js/animations/shift-away.css';

/**
 * @type {import('../contracts/command').default}
 */
const createTippy = {
  execute: () => {
    tippy('.js-tippy', {
      animation: 'shift-away',
      theme: 'dark-and-light',
    });
  },
};

export default createTippy;
