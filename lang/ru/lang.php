<?php return [
    'plugin' => [
        'name' => 'SEO (Sitemap/Robots)',
        'description' => 'Плагин для SEO разметки и генерации Sitemap.xml и Robots.txt'
    ],

    'config' => [
        'description' => 'Настройки sitemap.xml и robots.txt',
        'meta_title' => 'Заголовок страницы (META title)',
        'meta_description' => 'Описание страницы (META description)',
        'use_in_sitemap' => 'Включить страницу в sitemap.xml',
        'model_class' => [
            'label' => 'PHP Class для списка страниц в Sitemap.xml',
            'comment' => 'Author\Plugin\Models\modelClass, можно указывать несколько через запятую'
        ],
        'priority' => 'Приоритет страницы',
    ],

    'permissions' => [
        'labels' => [
            'sitemap' => 'Вкладка Sitemap',
            'meta' => 'Вкладка Meta',
            'settings' => 'Настройки плагина',
        ]
    ],

    'settings' => [
        'enable_robots_txt' => 'Использовать robots.txt',
        'enable_sitemap' => 'Использовать sitemap.xml',
        'use_canonical' => 'Использовать тег Canonical',
        'stock_description' => [
            'label' => 'Универсальный Мета тег description',
            'comment' => 'Используется, если у страницы не заполнен мета тег description',
        ],
        'enable_robots_txt' => 'Использовать robots.txt',
    ],

    'component' => [
        'description' => 'Отображает мета-теги SEO',
    ]
];