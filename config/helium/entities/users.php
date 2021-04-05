<?php

use App\User;
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
        'title' => 'HELLLLOOOOOO',
        'fields' => [
            'name',
            'email',
            'date_to_remember' => [
                'type' => 'datetime'
            ],
            'image' => [
                'column' => 'image_id',
                'type' => 'belongsTo',
                'related_name' => 'filename',
                'placeholder' => 'Please Select...',
            ],
            'bio' => [
                'type' => 'radio',
                'placeholder' => 'Please Select...',
                'required' => true,
                'options' => TestOptionsHandler::class
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
