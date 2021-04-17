<?php

return [
    'model' => App\Image::class,
    'table' => [
        'search' => [
            'columns' => [
                'filename',
                'parent.filename',
            ],
        ],
        'columns' => [
            'id',
            'filename',
            'parent' => [
                'value' => '{entry.parent.filename}'
            ],
        ],
        'actions' => [
            'edit'
        ],
    ],
    'fields' => [
        'filename',
        'parent' => [
            'type' => 'belongsTo',
            'related_model' => App\Image::class,
            'related_name' => 'filename',
            'placeholder' => 'None'
        ],
        'created_at' => [
            'label' => 'Bob\'s favourite date'
        ],
    ],
    'forms' => [
        '*' => [
            'tabs' => [
                'main' => 'Hello',
                'second' => 'Second',
            ],
            'fields' => [
                'main' => [
                    'filename',
                    'parent',
                ],
                'second' => [
                    'created_at' => 'datetime'
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
