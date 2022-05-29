<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Devega Theme',
    'description' => 'Theme for deVega Praesentationsmappen.',
    'category' => 'plugin',
    'author' => 'Nirmalya Mondal',
    'author_email' => 'nirmalya.mondal@gmail.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '11.5.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'container' => '1.6.0-',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
