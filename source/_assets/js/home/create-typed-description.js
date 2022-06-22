// @ts-check

import Typed from 'typed.js';

/**
 * @type {import('../contracts/command').default}
 */
const createTypedDescription = {
  execute: () => {
    const typed = new Typed('.js-typed', {
      stringsElement: '.js-typed-strings',
      typeSpeed: 70,
      backSpeed: 40,
      backDelay: 4000,
      onComplete: () => {
        document.querySelectorAll('.js-introducing-myself').forEach((element) => {
          element.classList.add('hidden');
        });

        document.querySelectorAll('.js-finished-introducing-myself').forEach((element) => {
          element.classList.remove('hidden');
        });
      },
      onStop(arrayPos, self) {
        this.onComplete(self);

        const importantContent = document.querySelector('.js-typed-important').textContent;

        setTimeout(() => {
          document.querySelector('.js-typed').textContent = importantContent;
        }, 100);
      },
    });

    document.querySelector('.js-skip-typed-animation').addEventListener('click', () => {
      typed.stop();
    });
  },
};

export default createTypedDescription;
