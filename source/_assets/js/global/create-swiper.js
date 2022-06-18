// @ts-check

import Swiper, { Navigation, Pagination, Mousewheel } from 'swiper';
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
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.js-swiper-button-next',
      },
    });

    const navigationItems = document.querySelectorAll('.js-nav-item');
    const activeCLass = Array.from(navigationItems[0].classList)
      .filter((className) => className.includes('active:'))
      .map((className) => className.replace('active:', ''));

    swiper.on('slideChange', (slide) => {
      navigationItems[slide.previousIndex].classList.remove(...activeCLass);
      navigationItems[slide.activeIndex].classList.add(...activeCLass);
    });

    navigationItems.forEach((item, index) => {
      item.addEventListener('click', () => {
        swiper.slideTo(index);
      });
    });
  },
};

export default createSwiper;
