// @ts-check

import { dom, library } from '@fortawesome/fontawesome-svg-core';
import {
  faAngleDoubleDown, faAngleLeft, faAngleRight, faBars, faMoon, faSun,
} from '@fortawesome/free-solid-svg-icons';

/**
 * @type {import('../contracts/command').default}
 */
const createFa = {
  execute: () => {
    library.add(faAngleDoubleDown, faAngleLeft, faAngleRight, faBars, faMoon, faSun);
    dom.watch();
  },
};

export default createFa;
