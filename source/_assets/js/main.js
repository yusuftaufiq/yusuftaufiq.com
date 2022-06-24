// @ts-check

import createFa from './global/create-fa';
import createSimpleIcons from './global/create-simple-icons';
import createSwiper from './global/create-swiper';
import createTippy from './global/create-tippy';
import createDarkMode from './home/create-dark-mode';
import createTypedDescription from './home/create-typed-description';
import createHorizontalProjectNavigation from './projects/create-horizontal-swiper';
import createHorizontalSkillNavigation from './skills/create-horizontal-swiper';
import createNavigation from './skills/create-navigation';

const executeAllCommands = () => {
  [
    createFa,
    createSimpleIcons,
    createSwiper,
    createTippy,
    createDarkMode,
    createTypedDescription,
    createHorizontalProjectNavigation,
    createHorizontalSkillNavigation,
    createNavigation,
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
