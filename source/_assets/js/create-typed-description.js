// @ts-check

import Typed from 'typed.js';

/**
 * @type {import('./command').Command}
 */
const createTypedDescription = {
  execute: () => {
    new Typed('.js-typed', {
      stringsElement: '.js-typed-strings',
      typeSpeed: 70,
      backSpeed: 40,
      backDelay: 4000,
    });  
  }
};

export { createTypedDescription };
