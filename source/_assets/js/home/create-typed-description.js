// @ts-check

import Typed from 'typed.js';

/**
 * @type {import('../contracts/command').Command}
 */
const createTypedDescription = {
  execute: () => {
    const typed = new Typed('.js-typed', {
      stringsElement: '.js-typed-strings',
      typeSpeed: 70,
      backSpeed: 40,
      backDelay: 4000,
    });
  },
};

export default createTypedDescription;
