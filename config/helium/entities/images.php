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
    'form' => [
        'fields' => [
            'filename'
        ],
        'actions' => [
            'save'
        ]
    ]
];
