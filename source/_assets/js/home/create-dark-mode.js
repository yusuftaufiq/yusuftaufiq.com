// @ts-check

const changeToDarkMode = () => {
  localStorage.theme = 'dark';
  document.documentElement.classList.add('dark');
};

const changeToLightMode = () => {
  localStorage.theme = 'light';
  document.documentElement.classList.remove('dark');
};

const changeTheme = () => {
  if (
    ('theme' in localStorage === false && window.matchMedia('(prefers-color-scheme: dark)').matches)
    || localStorage.theme === 'dark'
  ) {
    changeToDarkMode();
  } else {
    changeToLightMode();
  }
};

/**
 * @type {import('../contracts/command').default}
 */
const createDarkMode = {
  execute: () => {
    changeTheme();
    document.querySelector('.js-dark-mode').addEventListener('click', changeToDarkMode);
    document.querySelector('.js-light-mode').addEventListener('click', changeToLightMode);
  },
};

export default createDarkMode;
