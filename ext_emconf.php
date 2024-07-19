<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Suggest with autocreation for tags of EXT:news',
    'description' => 'Let editors create tags quickly while editing a news record',
    'category' => 'be',
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.13-11.9.99',
            'news' => '9.0.0-11.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
