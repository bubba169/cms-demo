<?php

use App\User;

return [
    'name' => 'Boah',
    'model' => User::class,
    'table' => [
        'columns' => [
            'id',
            'name' => [
                'label' => 'Name Me Boy\'o'
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
