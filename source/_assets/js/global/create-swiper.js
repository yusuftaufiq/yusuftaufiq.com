// @ts-check

import Swiper, { Mousewheel, Navigation, Pagination } from 'swiper';
import { getActiveClassesOf } from './helpers';
/* eslint-disable import/no-unresolved */
import 'swiper/css';
import 'swiper/css/pagination';
/* eslint-enable import/no-unresolved */

/**
 * @type {import('../contracts/command').default}
 */
const createSwiper = {
  execute: () => {
    const swiper = new Swiper('.js-swiper', {
      modules: [Navigation, Pagination, Mousewheel],
      direction: 'vertical',
      slidesPerView: 1,
      spaceBetween: 30,
      mousewheel: true,
      preventInteractionOnTransition: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.js-swiper-button-next',
      },
    });

    const navigationItems = document.querySelectorAll('.js-nav-item');
    const activeClasses = getActiveClassesOf(navigationItems[0]);

    swiper.on('slideChange', (slide) => {
      navigationItems[slide.previousIndex].classList.remove(...activeClasses);
      navigationItems[slide.activeIndex].classList.add(...activeClasses);
    });

    navigationItems.forEach((item, index) => {
      item.addEventListener('click', () => {
        swiper.slideTo(index);
      });
    });
  },
};

export default createSwiper;
