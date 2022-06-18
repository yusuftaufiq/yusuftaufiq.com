<?php

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
                'My name is Yusuf Taufiqurrahman',
                'I am a Software Developer',
                'I am a Tech Enthusiast',
                'Keep scrolling to know more about me!',
            ],
        ],
        'about' => [
            'image' => 'https://images.unsplash.com/photo-1554629947-334ff61d85dc?auto=format&fit=crop&w=512&h=256&q=80',
            'content' => <<<HTML
                <span class="js-tippy" data-tippy-content="Who am I?">I am a <b>Software Developer</b> who loves to build software with testable, maintainable, and high-performance code.</span>
                <span class="js-tippy" data-tippy-content="What experience do I have?">I have experience developing <b>backend</b> and  <b>front-end</b> applications, mainly using PHP and its ecosystems such as <b>Laravel</b> and <b>CodeIgniter</b>.</span>
                <span class="js-tippy" data-tippy-content="What challenges do I like?">Learning new things is also an exciting challenge for me!</span>
            HTML,
        ],
    ],
];
