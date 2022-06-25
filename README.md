![Personal Site Logo](https://raw.githubusercontent.com/yusuftaufiq/yusuftaufiq.com/main/site-banner.png)

<p align="center">
  <a href="https://www.netlify.com/">
    <img alt="Netlify" src="https://img.shields.io/netlify/74f34fc6-5e3a-4ee7-876a-991734094867?color=white&label=netlify%20build&logo=netlify">
  </a>
  <a href="https://github.com/yusuftaufiq/yusuftaufiq.com/blob/main/LICENSE">
    <img alt="License" src="https://img.shields.io/github/license/yusuftaufiq/yusuftaufiq.com?color=lightgrey">
  </a>
  <a href="https://yusuftaufiq.com">
    <img alt="Website" src="https://img.shields.io/website?down_message=offline&up_color=white&up_message=online&url=https%3A%2F%2Fyusuftaufiq.com">
  </a>
</p>

## Features

- Responsive across device sizes
- Dark & light mode
- Smooth animation
- Fast loading (<90KB), unnecessary CSS and JavaScript files not delivered in production
- Easy customization using just a configuration file

## Installation

Requirements: You need PHP (>= 8), Composer, Node.js along with NPM, or another package manager installed on your local machine.

- Clone or download this repository
- Install dependencies with `composer install` and `npm install`
- Now, you can preview the site with `npm run watch`
- Finally, you can run `npm run prod` to compile the assets file if you have finished modifying the site

## Configuration

To replace all the content on the site, you can modify the [`config.php`](./config.php) file. You can also override any configuration you write in [`config.php`](./config.php) when run in a production environment via the [`config.production.php`](./config.production.php) file. See [here](https://jigsaw.tighten.com/docs/building-and-previewing-environments/) for more details.

## Deployments

Since the end result of this application is static HTML, CSS, and JavaScript. So, you can use a free service for hosting static sites like Github Pages or Netlify. See [here](https://jigsaw.tighten.com/docs/deploying-your-site/) for more documentation.

## Libraries

- Static site generator: [Jigsaw](https://jigsaw.tighten.com/)
- Frontend framework: [Tailwind CSS](https://tailwindcss.com/)
- Icons: [Font Awesome](https://fontawesome.com/), [Simple Icons](https://simpleicons.org/)
- Animations: [Swiper.js](https://swiperjs.com/), [Typed.js](https://mattboldt.com/demos/typed-js/), [Tippy.js](https://atomiks.github.io/tippyjs/)

## Credits

Some layout styles are taken from [Mamba UI](https://github.com/Microwawe/mamba-ui).

## Related Projects

If you don't find what you are looking for in this repository, you may be interested in the following related projects:

- [https://github.com/cobiwave/simplefolio](https://github.com/cobiwave/simplefolio)
- [https://github.com/albinotonnina/albinotonnina.com](https://github.com/albinotonnina/albinotonnina.com)
- [https://github.com/Renovamen/playground-macos](https://github.com/Renovamen/playground-macos)
