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
        'tabs' => [
            'second' => 'Images'
        ],
        'fields' => [
            'name',
            'email' => 'email',
            'date_to_remember' => 'datetime',
            'image' => [
                'column' => 'image_id',
                'type' => 'belongsTo',
                'related_model' => Image::class,
                'related_name' => 'filename',
                'placeholder' => 'Please Select...',
                'tab' => 'second',
            ],
            'images' => [
                'type' => 'belongsToMany',
                'related_model' => Image::class,
                'related_name' => 'filename',
                'tab' => 'second',
            ],
            'bio' => [
                'type' => 'multicheck',
                'options' => TestOptionsHandler::class
            ],
            'password' => 'password',
            'enabled' => 'checkbox',
        ],
        'actions' => [
            'save'
        ]
    ]
];
