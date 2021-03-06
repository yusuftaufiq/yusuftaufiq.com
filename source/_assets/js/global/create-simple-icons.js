// @ts-check

import {
  siBootstrap,
  siCodeigniter,
  siDocker,
  siGit,
  siGithub,
  siJavascript,
  siJquery,
  siLaravel,
  siLinkedin,
  siMysql,
  siPackagist,
  siPhp,
  siPostgresql,
  siPostman,
  siStackoverflow,
  siSwagger,
  siTailwindcss,
} from 'simple-icons/icons';

const icons = [
  siBootstrap,
  siCodeigniter,
  siDocker,
  siGit,
  siGithub,
  siJavascript,
  siJquery,
  siLaravel,
  siLinkedin,
  siMysql,
  siPackagist,
  siPhp,
  siPostgresql,
  siPostman,
  siStackoverflow,
  siSwagger,
  siTailwindcss,
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
