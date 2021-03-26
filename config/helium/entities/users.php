<?php

use App\User;

return [
    'model' => User::class,
    'table' => [
        'columns' => [
            'id',
            'name' => [
                'label' => 'Name'
            ],
        ]
    ],
    'form' => [
        'fields' => [
            'name',
            'email',
        ],
    ]
];
