// @ts-check

import tippy, { delegate } from 'tippy.js';
import 'tippy.js/animations/shift-away.css';
import 'tippy.js/dist/tippy.css';

/**
 * @type {import('../contracts/command').default}
 */
const createTippy = {
  execute: () => {
    tippy('.js-tippy', {
      animation: 'shift-away',
      theme: 'dark-and-light',
    });

    delegate('.js-tippy', {
      target: 'body',
    });
  },
};

export default createTippy;
