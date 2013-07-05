<?php

return [
    'service_manager' => [
        'aliases' => [
            // TODO: This is a fix for a bug in ZfcUserDoctrineORM. Details can be found at: https://github.com/ZF-Commons/ZfcUserDoctrineORM/issues/54
            'zfcuser_doctrine_em' => 'Doctrine\ORM\EntityManager',
        ],
    ],
];
