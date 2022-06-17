// @ts-check

import { createDarkMode } from "./create-dark-mode";
import { createTypedDescription } from "./create-typed-description";
import { createTippy } from "./create-tippy";
import { createSwiper } from "./create-swiper";
import { createFa } from "./create-fa";

const executeAllCommands = () => {
  [createDarkMode, createTypedDescription, createTippy, createSwiper, createFa].forEach((command) => {
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
