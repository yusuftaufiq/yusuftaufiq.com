// @ts-check

import {
  siDocker,
  siGit,
  siGithub,
  siJavascript,
  siLaravel,
  siLinkedin,
  siMysql,
  siPackagist,
  siPhp,
  siPostman,
  siStackoverflow,
  siTailwindcss,
  siTypescript,
  siNestjs,
  siAlpinedotjs,
  siNodedotjs,
  siReddit,
  siNpm,
} from 'simple-icons/icons';

const icons = [
  siDocker,
  siGit,
  siGithub,
  siJavascript,
  siLaravel,
  siLinkedin,
  siMysql,
  siPackagist,
  siPhp,
  siPostman,
  siStackoverflow,
  siTailwindcss,
  siTypescript,
  siNestjs,
  siAlpinedotjs,
  siNodedotjs,
  siReddit,
  siNpm,
];

/**
 * @type {import('../contracts/command').default}
 */
const createSimpleIcon = {
  execute: () => {
    icons.forEach((icon) => {
      const nodes = document.querySelectorAll(`.si.si-${icon.slug}`);
      const attributes = [
        { key: 'aria-hidden', value: 'true' },
        { key: 'focusable', value: 'false' },
        { key: 'role', value: 'img' },
        { key: 'data-prefix', value: 'si' },
        { key: 'data-icon', value: icon.slug },
      ];

      nodes.forEach((node) => {
        const iconNode = node;

        iconNode.innerHTML = icon.svg;
        iconNode.classList.add('svg-inline--si', `si-${icon.slug}`);
        iconNode.querySelector('path').setAttribute('fill', 'currentColor');
        iconNode.querySelector('title').remove();

        attributes.forEach((attribute) => {
          iconNode.setAttribute(attribute.key, attribute.value);
        });
      });
    });
  },
};

export default createSimpleIcon;
