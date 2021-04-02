<?php

use App\User;

return [
    'name' => 'Boah',
    'model' => User::class,
    'table' => [
        'columns' => [
            'id',
            'name' => [
                'label' => 'Name Me Boy\'o',
            ],
            'image' => [
                'value' => '{{ entry.image.filename }}',
                'view' => 'helium::table-cell.inline'
            ],
        ],
        'actions' => [
            'edit'
        ]
    ],
    'form' => [
        'title' => 'HELLLLOOOOOO',
        'fields' => [
            'name',
            'email',
        ],
    ]
];
