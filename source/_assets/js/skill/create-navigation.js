// @ts-check

import { getActiveClassesOf } from '../global/helpers';

/**
 * @type {import('../contracts/command').default}
 */
const createNavigation = {
  execute: () => {
    const navigationLinks = document.querySelectorAll('.js-nav-link');
    const activeClasses = getActiveClassesOf(navigationLinks[0]);

    navigationLinks.forEach((link) => {
      link.addEventListener('click', () => {
        const target = link.getAttribute('data-target');
        const targetTab = document.querySelector(target);
        const previousActiveTab = document.querySelector('.js-tab-pane.flex');

        document.querySelector(`[data-target="#${previousActiveTab.id}"]`).classList.remove(...activeClasses);
        link.classList.add(...activeClasses);

        [previousActiveTab, targetTab].forEach((tab) => {
          tab.classList.toggle('flex');
          tab.classList.toggle('hidden');
        });
      });
    });
  },
};

export default createNavigation;
