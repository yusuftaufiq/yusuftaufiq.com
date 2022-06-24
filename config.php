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
                    <span class="js-typed-important">My name is Yusuf Taufiqurrahman</span>
                HTML,
                'I am a Software Developer',
                'I am a Tech Enthusiast',
                'Keep scrolling to know more about me!',
            ],
        ],
        'about' => [
            'image' => 'https://drive.google.com/uc?export=view&id=12KpXGn0SRgDJw5iXxzm4waLExpskR6-4',
            'content' => <<<HTML
                <span class="js-tippy" data-tippy-content="Who am I?">
                    I am a <b>Software Developer</b> who loves to build software with testable, maintainable, and high-performance code.
                </span>
                <span class="js-tippy" data-tippy-content="What experience do I have?">
                    I have 3 years of experience developing <b>backend</b> and  <b>front-end</b> applications, mainly using PHP and its ecosystems such as <b>Laravel</b> and <b>CodeIgniter</b>.
                </span>
                <span class="js-tippy" data-tippy-content="What challenges do I like?">
                    Learning new things is also an exciting challenge for me!
                </span>
            HTML,
        ],
        /**
         * Apart from proficient and familiar categories, you can also add other new categories.
         */
        'skills' => [
            'proficient' => [
                ['name' => 'PHP', 'icon' => 'php'],
                ['name' => 'Laravel', 'icon' => 'laravel'],
                ['name' => 'CodeIgniter', 'icon' => 'codeigniter'],
                ['name' => 'RESTful API', 'icon' => 'swagger'],
                ['name' => 'PostgreSQL', 'icon' => 'postgresql'],
                ['name' => 'MySQL', 'icon' => 'mysql'],
                ['name' => 'JavaScript', 'icon' => 'javascript'],
                ['name' => 'jQuery', 'icon' => 'jquery'],
            ],
            'familiar' => [
                ['name' => 'Git', 'icon' => 'git'],
                ['name' => 'GitHub Actions', 'icon' => 'github'],
                ['name' => 'Tailwind', 'icon' => 'tailwindcss'],
                ['name' => 'Bootstrap', 'icon' => 'bootstrap'],
                ['name' => 'Docker', 'icon' => 'docker'],
            ],
        ],
        'projects' => [
            [
                'title' => 'Laravel Books API',
                'description' => 'An application to scrape data and provide results in a RESTful API format.',
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
                'title' => 'CodeIgniter 3 IDE Helper',
                'description' => 'CLI application to generate IDE helper for CodeIgniter 3.',
                'stacks' => ['PHP', 'Docker', 'CI/CD (GitHub Actions)'],
                'links' => [
                    [
                        'name' => 'GitHub',
                        'icon' => 'github',
                        'url' => 'https://github.com/yusuftaufiq/codeigniter3-ide-helper',
                    ],
                    [
                        'name' => 'Packagist',
                        'icon' => 'packagist',
                        'url' => 'https://packagist.org/packages/haemanthus/codeigniter3-ide-helper',
                    ],
                    [
                        'name' => 'Docker Hub',
                        'icon' => 'docker',
                        'url' => 'https://hub.docker.com/repository/docker/haemanthus/codeigniter3-ide-helper',
                    ],
                ],
            ],
            [
                'title' => 'Personal Portfolio Page',
                'description' => 'Modern, responsive, and configurable static personal portfolio page (the page you are viewing now).',
                'stacks' => ['JavaScript', 'Blade', 'Tailwind CSS'],
                'links' => [
                    [
                        'name' => 'GitHub',
                        'icon' => 'github',
                        'url' => 'https://github.com/yusuftaufiq/yusuftaufiq',
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
        ],
    ],
];
