<?php

return [
    'service_manager' => [
        'aliases' => [
            // TODO: This is a fix for a bug in ZfcUserDoctrineORM. Details can be found at: https://github.com/ZF-Commons/ZfcUserDoctrineORM/issues/54
            'zfcuser_doctrine_em' => 'Doctrine\ORM\EntityManager',
        ],
    ],

    'spiffy_navigation' => include __DIR__ . '/navigation.config.php',

    'zfcuser' => [
        'logout_redirect_route' => 'home',
    ],
];
