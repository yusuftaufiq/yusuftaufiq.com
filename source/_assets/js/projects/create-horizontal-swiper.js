// @ts-check

import Swiper, { Navigation } from 'swiper';
/* eslint-disable import/no-unresolved */
import 'swiper/css';
import { hideAll } from 'tippy.js';
/* eslint-enable import/no-unresolved */
import { swiperOf } from '../global/helpers';

/**
 * @type {import('../contracts/command').default}
 */
const createHorizontalProjectNavigation = {
  execute: () => {
    const element = document.querySelector('.js-swiper-projects');

    const swiper = new Swiper('.js-swiper-projects', {
      modules: [Navigation],
      navigation: {
        nextEl: '.projects-swiper-button-next',
        prevEl: '.projects-swiper-button-prev',
      },
      breakpoints: {
        768: {
          slidesPerView: swiperOf(element).getMaxChildSlides(2),
        },
      },
    });

    swiper.on('reachBeginning', () => {
      hideAll();
    });

    swiper.on('reachEnd', () => {
      hideAll();
    });
  },
};

export default createHorizontalProjectNavigation;
