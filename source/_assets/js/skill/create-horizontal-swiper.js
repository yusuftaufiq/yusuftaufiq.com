// @ts-check

import Swiper, { Autoplay, Navigation } from 'swiper';
/* eslint-disable import/no-unresolved */
import 'swiper/css';
import { swiperOf } from '../global/helpers';
/* eslint-enable import/no-unresolved */

/**
 * @type {import('../contracts/command').default}
 */
const createHorizontalSkillNavigation = {
  execute: () => {
    document.querySelectorAll('.js-swiper-skills').forEach((element) => {
      if (element instanceof HTMLElement) {
        const swiper = new Swiper(element, {
          modules: [Autoplay, Navigation],
          navigation: (() => {
            const category = element.getAttribute('data-category');

            return {
              nextEl: `.${category}-swiper-button-next`,
              prevEl: `.${category}-swiper-button-prev`,
            };
          })(),
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
          breakpoints: (() => {
            const swiperOfElement = swiperOf(element);

            return {
              350: {
                slidesPerView: swiperOfElement.getMaxChildSlides(2),
              },
              640: {
                loop: false,
                slidesPerView: swiperOfElement.getMaxChildSlides(3),
              },
              768: {
                loop: false,
                slidesPerView: swiperOfElement.getMaxChildSlides(4),
              },
            };
          })(),
        });
      }
    });
  },
};

export default createHorizontalSkillNavigation;
