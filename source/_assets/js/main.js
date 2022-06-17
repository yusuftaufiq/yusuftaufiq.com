// @ts-check

import { createSwiper } from "./create-swiper";

const executeAllCommands = () => {
  [createSwiper].forEach((command) => {
    command.execute()
  });
};

(async () => {
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
      executeAllCommands();
    })
  } else {
    executeAllCommands();
  }
})();
