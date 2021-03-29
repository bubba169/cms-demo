<?php

use App\User;

return [
    'name' => 'Boah',
    'model' => User::class,
    'table' => [
        'title' => 'Managing Boahs',
        'columns' => [
            'id',
            'name' => [
                'label' => 'Name Me Boy\'o',
            ],
            'image' => [
                'value' => '{entity.image.filename}'
            ],
        ],
        'actions' => [
            'edit' => []
        ]
    ],
    'form' => [
        'fields' => [
            'name',
            'email',
        ],
    ]
];
