// @ts-check

/**
 * @param {Element} element
 */
const getActiveClassesOf = (element) => Array.from(element.classList)
  .filter((className) => className.includes('hover:'))
  .map((className) => className.replace('hover:', ''));

export default getActiveClassesOf;
