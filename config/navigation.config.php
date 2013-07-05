<?php

return [
    'containers' => [
        'user' => [
            [
                'name' => 'user',
                'options' => [
                    'label' => 'User',
                    'route' => 'zfcuser',
                ],
                'pages' => [
                    [
                        'name' => 'user',
                        'options' => [
                            'label' => 'Profile',
                            'route' => 'zfcuser',
                        ],
                    ],
                    [
                        'name' => 'logout',
                        'options' => [
                            'label' => 'Sign Out',
                            'route' => 'zfcuser/logout',
                        ],
                    ],
                ],
            ],
        ],
        'login' => [
            [
                'name' => 'login',
                'options' => [
                    'label' => 'Sign In',
                    'route' => 'zfcuser/login'
                ],
            ],
        ],
    ],
];
