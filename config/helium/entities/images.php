<?php

return [
    'model' => App\Image::class,
    'table' => [
        'columns' => [
            'id',
            'filename',
            'updated_at' => [
                'label' => 'Updated'
            ],
            'created_at' => [
                'label' => 'Created'
            ],
        ],
        'actions' => [
            'edit'
        ],
    ],
    'fields' => [
        'filename',
        'created_at' => 'datetime',
    ],
    'forms' => [
        '*' => [
            'tabs' => [
                'main' => 'Hello',
                'second' => 'Second',
            ],
            'fields' => [
                'main' => [
                    'filename'
                ],
                'second' => [
                    'created_at' => [
                        'label' => 'Date of Origin'
                    ]
                ]
            ],
            'actions' => [
                'save'
            ]
        ],
        'add',
        'edit',
    ]
];
