// @ts-check

import Swiper, { Autoplay, Navigation } from 'swiper';
/* eslint-disable import/no-unresolved */
import 'swiper/css';
/* eslint-enable import/no-unresolved */

/**
 * @type {import('../contracts/command').default}
 */
const createHorizontalSkillNavigation = {
  execute: () => {
    document.querySelectorAll('.js-swiper-skills').forEach((element) => {
      /**
       * @param {Number} length
       */
      const evaluateMaxLengthOfChild = (length) => {
        const carouselChildren = element.querySelectorAll('.swiper-slide').length;

        return (length >= carouselChildren ? carouselChildren : length);
      };

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
          breakpoints: {
            350: {
              slidesPerView: evaluateMaxLengthOfChild(2),
            },
            640: {
              loop: false,
              slidesPerView: evaluateMaxLengthOfChild(3),
            },
            768: {
              loop: false,
              slidesPerView: evaluateMaxLengthOfChild(4),
            },
          },
        });
      }
    });
  },
};

export default createHorizontalSkillNavigation;
