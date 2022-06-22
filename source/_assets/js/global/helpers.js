// @ts-check

/**
 * @param {Element} element
 */
const getActiveClassesOf = (element) => Array.from(element.classList)
  .filter((className) => className.includes('hover:'))
  .map((className) => className.replace('hover:', ''));

/**
 * @param {Element} element
 */
const swiperOf = (element) => ({
  /**
   * @param {Number} length
   */
  getMaxChildSlides: (length) => {
    const carouselChildren = element.querySelectorAll('.swiper-slide').length;

    return length >= carouselChildren ? carouselChildren : length;
  },
});

export { getActiveClassesOf, swiperOf };
