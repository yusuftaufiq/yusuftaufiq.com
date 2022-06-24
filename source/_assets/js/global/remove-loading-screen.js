// @ts-check

/**
 * @type {import('../contracts/command').default}
 */
const removeLoadingScreen = {
  execute: () => {
    document.querySelector('.js-loading-screen').remove();
  },
};

export default removeLoadingScreen;
