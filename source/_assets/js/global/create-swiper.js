// @ts-check

import Swiper, { Navigation, Pagination, Mousewheel } from 'swiper';
/* eslint-disable import/no-unresolved */
import 'swiper/css';
import 'swiper/css/pagination';
/* eslint-enable import/no-unresolved */

const initSwiper = () => new Swiper('.js-swiper', {
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

/**
 * @type {import('../contracts/command').default}
 */
const createSwiper = {
  execute: () => {
    const swiper = initSwiper();

    const navigationItems = document.querySelectorAll('.js-nav-item');
    const activeClasses = Array.from(navigationItems[0].classList)
      .filter((className) => className.includes('active:'))
      .map((className) => className.replace('active:', ''));

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
