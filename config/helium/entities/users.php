<?php

use App\User;
use App\Image;
use Helium\Form\TestOptionsHandler;
use Helium\Table\DefaultSearchHandler;

return [
    'name' => 'Boah',
    'model' => User::class,
    'table' => [
        'search' => [
            'columns' => [
                'name',
                'email',
                'image.filename'
            ]
        ],
        'filters' => [
            'enabled' => [
                'type' => 'boolean',
            ],
            'image' => [
                'type' => 'belongsTo',
                'related_model' => Image::class,
                'related_name' => 'filename',
                'column' => 'image_id'
            ],
            'email',
            'name',
            'bio'
        ],
        'columns' => [
            'id',
            'email',
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
            'type' => 'textarea',
            'description' => 'This is a field description. It is incredibly useful.',
            'required' => true,
        ],
        'email' => [
            'type' => 'email',
            'description' => 'This is a field description. It is incredibly useful.',
            'required' => true
        ],
        'date_to_remember' => [
            'description' => 'This is a field description. It is incredibly useful.',
            'type' => 'datetime',
            'rules' => 'required|date|after:2021-05-05',
            'attributes' => [
                'All' => 'yes',
                'date' => [
                    'IsDate' => 'Yes',
                    'IsTime' => 'No'
                ],
                'time' => [
                    'IsDate' => 'No',
                    'IsTime' => 'Yes'
                ]
            ]
        ],
        'image' => [
            'column' => 'image_id',
            'type' => 'belongsTo',
            'related_model' => Image::class,
            'related_name' => 'filename',
            'placeholder' => 'Please select',
            'description' => 'This is a field description. It is incredibly useful.',
        ],
        'images' => [
            'type' => 'belongsToMany',
            'related_model' => Image::class,
            'related_name' => 'filename',
            'rules' => 'required'
        ],
        'bio' => [
            'type' => 'radio',
            'options' => TestOptionsHandler::class,
            'description' => 'This is a field description. It is incredibly useful.',
        ],
        'password' => [
            'type' => 'password',
            'description' => 'Leave this field blank to keep the previous password unchanged',
            'attributes' => [
                'franke' => 'bob',
                'autocomplete' => 'bob',
            ]
        ],
        'enabled' => [
            'type' => 'checkbox',
            'description' => 'Enable this for ultimate awesomeness',
            'required' => true
        ],
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
