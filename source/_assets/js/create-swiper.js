/* eslint-disable import/no-unresolved */
// @ts-check

import Swiper, { Navigation, Pagination, Mousewheel } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

/**
 * @type {import('./command').Command}
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
    });
  },
};

export default createSwiper;
