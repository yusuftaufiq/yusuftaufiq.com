// @ts-check

import createFa from './global/create-fa';
import createSwiper from './global/create-swiper';
import createTippy from './global/create-tippy';
import createDarkMode from './home/create-dark-mode';
import createTypedDescription from './home/create-typed-description';

const executeAllCommands = () => {
  [
    createFa,
    createSwiper,
    createTippy,
    createDarkMode,
    createTypedDescription,
  ].forEach((command) => {
    command.execute();
  });
};

(async () => {
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', executeAllCommands);
  } else {
    executeAllCommands();
  }
})();
