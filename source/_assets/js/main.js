// @ts-check

import { createTippy } from "./create-tippy";
import { createSwiper } from "./create-swiper";

const executeAllCommands = () => {
  [createTippy, createSwiper].forEach((command) => {
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
