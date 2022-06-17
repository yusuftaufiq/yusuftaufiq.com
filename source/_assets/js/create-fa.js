// @ts-check

import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faMoon, faSun } from '@fortawesome/free-solid-svg-icons';

/**
 * @type {import('./command').Command}
 */
const createFa = {
  execute: () => {
    library.add(faMoon, faSun);
    dom.watch();
  },
};

export default createFa;
