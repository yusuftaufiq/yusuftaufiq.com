<?php

/**
 * If you want to add another icon, you need to modify ./source/_assets/js/global/create-simple-icons.js
 *
 * @see https://simpleicons.org/ for a list of all available icons.
 */

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',

    'siteTitle' => 'Yusuf Taufiqurrahman - Software Developer',
    'siteName' => 'Yusuf Taufiqurrahman Personal Site',
    'siteDescription' => 'Everything about me as a Software Developer',

    'siteSections' => [
        'home' => [
            'descriptions' => [
                'Hi, there!',
                /**
                 * You must have 1 value that has class "js-typed-important".
                 *
                 * An array value having this class will be displayed immediately
                 * when the animation in the typed description is skipped.
                 */
                <<<HTML
                    <span class="js-typed-important">I'm Yusuf Taufiqurrahman</span>
                HTML,
                'A Software Developer',
                'And Tech Enthusiast',
                'Keep scrolling to know more about me!',
            ],
        ],
        'about' => [
            'image' => 'https://drive.google.com/uc?export=view&id=12KpXGn0SRgDJw5iXxzm4waLExpskR6-4',
            'content' => <<<HTML
                <span class="js-tippy" data-tippy-content="Who am I?">
                    <b>Software Developer</b> who loves creating high-quality products for internal users and teams,
                </span>
                <span class="js-tippy" data-tippy-content="What experience do I have?">
                    with over four years of experience in enterprise web-based projects such as ERP (Enterprise Resource Planning), E-commerce, E-catalog, and other application related to accounting, purchasing, and marketing.
                </span>
            HTML,
        ],
        'skills' => [
            ['name' => 'PHP', 'icon' => 'php'],
            ['name' => 'Tailwind', 'icon' => 'tailwindcss'],
            ['name' => 'Node.js', 'icon' => 'nodedotjs'],
            ['name' => 'Alpine.js', 'icon' => 'alpinedotjs'],
            ['name' => 'JavaScript', 'icon' => 'javascript'],
            ['name' => 'MySQL', 'icon' => 'mysql'],
            ['name' => 'TypeScript', 'icon' => 'typescript'],
            ['name' => 'Git', 'icon' => 'git'],
            ['name' => 'Laravel', 'icon' => 'laravel'],
            ['name' => 'GitHub Actions', 'icon' => 'github'],
            ['name' => 'NestJs', 'icon' => 'nestjs'],
            ['name' => 'Docker', 'icon' => 'docker'],
        ],
        'projects' => [
            [
                'title' => 'Lyricstify',
                'description' => 'Command line based application to show synchronized Spotify lyrics in your terminal.',
                'stacks' => ['Node.js', 'TypeScript', 'NestJs', 'RxJs'],
                'links' => [
                    [
                        'name' => 'GitHub',
                        'icon' => 'github',
                        'url' => 'https://github.com/lyricstify/lyricstify',
                    ],
                    [
                        'name' => 'NPM',
                        'icon' => 'npm',
                        'url' => 'https://www.npmjs.com/package/@lyricstify/lyricstify',
                    ],
                ],
            ],
            [
                'title' => 'Basement Chat',
                'description' => 'Real-time chat widget package for your Laravel application with flexible broadcast driver support.',
                'stacks' => ['PHP', 'Laravel', 'TypeScript', 'AlpineJS', 'TailwindCSS'],
                'links' => [
                    [
                        'name' => 'GitHub',
                        'icon' => 'github',
                        'url' => 'https://github.com/basement-chat/basement-chat',
                    ],
                    [
                        'name' => 'Packagist',
                        'icon' => 'packagist',
                        'url' => 'https://packagist.org/packages/basement-chat/basement-chat',
                    ],
                ],
            ],
            [
                'title' => 'Laravel Books API',
                'description' => 'Fully documented & tested Laravel 9 RESTful books API scraped from Gramedia.',
                'stacks' => ['PHP', 'Laravel'],
                'links' => [
                    [
                        'name' => 'GitHub',
                        'icon' => 'github',
                        'url' => 'https://github.com/yusuftaufiq/laravel-books-api',
                    ],
                    [
                        'name' => 'Postman Doc.',
                        'icon' => 'postman',
                        'url' => 'https://documenter.getpostman.com/view/14291055/UVyoVcj5',
                    ],
                ],
            ],
            [
                'title' => 'Personal Portfolio Page',
                'description' => 'Simple, responsive, and configurable static personal portfolio page.',
                'stacks' => ['JavaScript', 'Blade', 'Tailwind CSS'],
                'links' => [
                    [
                        'name' => 'GitHub',
                        'icon' => 'github',
                        'url' => 'https://github.com/yusuftaufiq/yusuftaufiq.com',
                    ],
                ],
            ],
        ],
        'contacts' => [
            [
                'icon' => 'github',
                'name' => 'GitHub',
                'url' => 'https://github.com/yusuftaufiq/',
            ],
            [
                'icon' => 'stackoverflow',
                'name' => 'Stack Overflow',
                'url' => 'https://stackoverflow.com/users/14496736/yusuf-t',
            ],
            [
                'icon' => 'linkedin',
                'name' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/yusuftaufiq/',
            ],
            [
                'icon' => 'reddit',
                'name' => 'Reddit',
                'url' => 'https://www.reddit.com/user/yusuftaufiq',
            ]
        ],
    ],
];
