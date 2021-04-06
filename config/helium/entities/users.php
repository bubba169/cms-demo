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
    'form' => [
        'title' => 'Users',
        'fields' => [
            'name',
            'email',
            'date_to_remember' => [
                'type' => 'datetime'
            ],
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
            'password' => [
                'type' => 'password'
            ],
            'enabled' => [
                'type' => 'checkbox'
            ]
        ],
        'actions' => [
            'save'
        ]
    ]
];
