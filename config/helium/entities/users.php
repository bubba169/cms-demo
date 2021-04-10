<?php

use App\User;
use App\Image;
use Helium\Form\TestOptionsHandler;

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
                'value' => '{entry.image.filename}',
            ],
        ],
        'actions' => [
            'edit'
        ]
    ],
    'fields' => [
        'name' => [
            'rules' => 'required'
        ],
        'email' => 'email',
        'date_to_remember' => 'datetime',
        'image' => [
            'column' => 'image_id',
            'type' => 'belongsTo',
            'related_model' => Image::class,
            'related_name' => 'filename',
            'placeholder' => 'Please Select...',
        ],
        'images' => [
            'type' => 'belongsToMany',
            'related_model' => Image::class,
            'related_name' => 'filename',
        ],
        'bio' => [
            'type' => 'multicheck',
            'options' => TestOptionsHandler::class
        ],
        'password' => 'password',
        'enabled' => 'checkbox',
    ],
    'forms' => [
        '*' => [
            'tabs' => [
                'main' => 'Content',
                'images' => 'Images'
            ],
            'fields' => [
                'main' => [
                    'name' => [
                        'label' => 'Bob\'s Name'
                    ],
                    'email',
                    'date_to_remember',
                    'bio',
                    'enabled',
                    'password',
                ],
                'images' => [
                    'image',
                    'images',
                ],
            ],
            'actions' => [
                'save'
            ]
        ],
        'add' => [
            'fields' => [
                'main' => [
                    'email',
                    'password',
                    'enabled' => [
                        'type' => 'hidden',
                        'value' => false
                    ]
                ]
            ]
        ],
        'edit',
    ]
];
