// @ts-check

import createFa from './global/create-fa';
import createSwiper from './global/create-swiper';
import createTippy from './global/create-tippy';
import createDarkMode from './home/create-dark-mode';
import createTypedDescription from './home/create-typed-description';
import createNavigation from './skill/create-navigation';
import createSimpleIcon from './skill/create-simple-icon';

const executeAllCommands = () => {
  [
    createFa,
    createSwiper,
    createTippy,
    createDarkMode,
    createTypedDescription,
    createNavigation,
    createSimpleIcon,
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
