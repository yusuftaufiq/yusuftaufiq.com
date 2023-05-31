// @ts-check

import Swiper, { Autoplay, Navigation } from 'swiper';
/* eslint-disable import/no-unresolved */
import 'swiper/css';
import { hideAll } from 'tippy.js';
/* eslint-enable import/no-unresolved */
import { swiperOf } from '../global/helpers';

/**
 * @type {import('../contracts/command').default}
 */
const createHorizontalSkillNavigation = {
  execute: () => {
    document.querySelectorAll('.js-swiper-skills').forEach((element) => {
      if (element instanceof HTMLElement) {
        const swiper = new Swiper(element, {
          modules: [Autoplay, Navigation],
          navigation: {
            nextEl: '.skills-swiper-button-next',
            prevEl: '.skills-swiper-button-prev',
          },
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
                slidesPerView: swiperOfElement.getMaxChildSlides(4),
              },
              768: {
                loop: false,
                slidesPerView: swiperOfElement.getMaxChildSlides(5),
              },
            };
          })(),
        });

        swiper.on('reachBeginning', () => {
          hideAll();
        });

        swiper.on('reachEnd', () => {
          hideAll();
        });
      }
    });
  },
};

export default createHorizontalSkillNavigation;
