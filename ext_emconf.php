<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 't3 starter',
    'description' => 'It will cover basics of typoscript',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Learner\\T3StarterKit\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Divya',
    'author_email' => 'divyagoklani70@gmail.com',
    'author_company' => 'Learner',
    'version' => '1.0.0',
];
