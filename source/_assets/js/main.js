// @ts-check

import createFa from './global/create-fa';
import createSwiper from './global/create-swiper';
import createTippy from './global/create-tippy';
import createDarkMode from './home/create-dark-mode';
import createTypedDescription from './home/create-typed-description';
import createHorizontalSkillNavigation from './skill/create-horizontal-swiper';
import createNavigation from './skill/create-navigation';
import createHorizontalProjectNavigation from './project/create-horizontal-swiper';
import createSimpleIcon from './global/create-simple-icon';

const executeAllCommands = () => {
  [
    createFa,
    createSwiper,
    createTippy,
    createDarkMode,
    createTypedDescription,
    createHorizontalSkillNavigation,
    createNavigation,
    createSimpleIcon,
    createHorizontalProjectNavigation,
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
