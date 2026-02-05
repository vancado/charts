<?php
$EM_CONF[$_EXTKEY] = [
    'title'        => 'Charts',
    'description'  => 'Extension to create datasets and show them as line, bar, pie or doughnut chart in frontend',
    'category'     => 'fe',
    'author'       => 'Thorsten Hogenkamp',
    'author_email' => 'thorsten@hogenkamp-bocholt.de',
    'version'      => '3.0.3',
    'state'        => 'stable',
    'constraints'  => [
        'depends'  => [
            'typo3' => '11.5.0-13.4.99',
        ],
        'suggests' => [
            'spreadsheets' => '3.3.0-5.99.99',
        ],
    ],
    'autoload'     => [
        'psr-4' => [
            'Hoogi91\\Charts\\' => 'Classes',
        ],
    ],
];
