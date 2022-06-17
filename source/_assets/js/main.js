// @ts-check

import createDarkMode from './home/create-dark-mode';
import createTypedDescription from './home/create-typed-description';
import createTippy from './global/create-tippy';
import createSwiper from './global/create-swiper';
import createFa from './global/create-fa';

const executeAllCommands = () => {
  [
    createDarkMode,
    createTypedDescription,
    createTippy,
    createSwiper,
    createFa,
  ].forEach((command) => {
    command.execute();
  });
};

(async () => {
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
      executeAllCommands();
    });
  } else {
    executeAllCommands();
  }
})();
