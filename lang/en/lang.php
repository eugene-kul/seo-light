<?php return [
    'plugin' => [
        'name' => 'SEO (Sitemap/Robots)',
        'description' => 'Plugin for SEO markup and generation Sitemap.xml and Robots.txt'
    ],

    'config' => [
        'description' => 'Configure sitemap.xml and robots.txt',
        'meta_title' => 'META title',
        'meta_description' => 'META description',
        'use_in_sitemap' => 'Enable in the Sitemap.xml',
        'model_class' => [
            'label' => 'Associate this page with a model links will be generated from it\s records',
            'comment' => 'Author\Plugin\Models\modelClass, you can specify several separated by commas'
        ],
        'priority' => 'Page priority',
    ],

    'permissions' => [
        'labels' => [
            'sitemap' => 'Sitemap tab',
            'meta' => 'Meta Tab',
            'settings' => 'Plugin Settings',
        ]
    ],

    'settings' => [
        'enable_robots_txt' => 'Use Robots.txt',
        'enable_sitemap' => 'Use sitemap.xml',
        'use_canonical' => 'Use the Canonical tag',
        'stock_description' => [
            'label' => 'Universal Meta tag description',
            'comment' => 'Used if the description meta tag is not filled in for the page',
        ],
        'enable_robots_txt' => 'Use robots.txt',
    ],

    'component' => [
        'description' => 'Renders SEO meta tags in place',
    ]
];