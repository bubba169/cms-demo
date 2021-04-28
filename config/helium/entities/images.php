<?php

use Helium\Config\Form\Field\BelongsToField;
use Helium\Config\Form\Field\DateTimeField;

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
        'buttons' => [
            'add',
        ],
    ],
    'fields' => [
        'filename',
        'parent' => [
            'field' => BelongsToField::class,
            'relatedModel' => App\Image::class,
            'relatedName' => '{entry.filename}',
            'placeholder' => 'None'
        ],
        'created_at' => [
            'label' => 'Bob\'s favourite date',
            'type' => 'date',
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
                    'created_at' => DateTimeField::class,
                ]
            ],
            'actions' => [
                'save'
            ]
        ],
        'add',
        'edit' => [
            'buttons' => [
                'view'
            ]
        ],
    ]
];
