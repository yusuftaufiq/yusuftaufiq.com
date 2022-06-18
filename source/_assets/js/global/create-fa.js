// @ts-check

import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faMoon, faSun, faSortDown } from '@fortawesome/free-solid-svg-icons';

/**
 * @type {import('../contracts/command').default}
 */
const createFa = {
  execute: () => {
    library.add(faMoon, faSun, faSortDown);
    dom.watch();
  },
};

export default createFa;
