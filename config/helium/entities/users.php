<?php

use App\User;
use App\Image;
use Helium\Config\Form\Field\RadioField;
use Helium\Config\Form\Field\TextAreaField;
use Helium\Config\Form\Field\BelongsToField;
use Helium\Config\Table\Filter\BooleanFilter;
use Helium\Handler\Options\TestOptionsHandler;
use Helium\Config\Form\Field\BelongsToManyField;
use Helium\Config\Form\Field\CheckboxField;
use Helium\Config\Form\Field\DateTimeField;
use Helium\Config\Form\Field\MulticheckField;
use Helium\Config\Form\Field\PasswordField;

return [
    'name' => 'Boah',
    'model' => User::class,
    'table' => [
        //'view' => 'helium::debug',
        'search' => [
            'columns' => [
                'name',
                'email',
                'image.filename'
            ]
        ],
        'filters' => [
            'enabled' => [
                'field' => BooleanFilter::class,
            ],
            'image' => [
                'type' => 'belongsTo',
                'relatedModel' => Image::class,
                'relatedName' => '{entry.filename}',
            ],
        ],
        'columns' => [
            'id',
            'email',
            'name',
            'image' => '{entry.image.filename}',
        ],
        'actions' => [
            'edit'
        ]
    ],
    'fields' => [
        'name' => [
            'field' => TextAreaField::class,
            'description' => 'This is a field description. It is incredibly useful.',
            'required' => true,
        ],
        'email' => [
            'type' => 'email',
            'description' => 'This is a field description. It is incredibly useful.',
            'required' => true
        ],
        'date_to_remember' => [
            'field' => DateTimeField::class,
            'description' => 'This is a field description. It is incredibly useful.',
            'required' => true,
            'rules' => 'required|date|after:2021-05-05',
            'messages' => [
                'required' => 'The date is required for sure.',
                'after' => 'Min date fool',
            ],
        ],
        'image' => [
            'field' => BelongsToField::class,
            'relatedModel' => Image::class,
            'relatedName' => '{entry.filename}',
            'placeholder' => 'Please select',
            'description' => 'This is a field description. It is incredibly useful.',
        ],
        'images' => [
            'field' => BelongsToManyField::class,
            'relatedModel' => Image::class,
            'relatedName' => '{entry.filename}',
            'rules' => 'required'
        ],
        'bio' => [
            'field' => MulticheckField::class,
            'options' => TestOptionsHandler::class,
            'description' => 'This is a field description. It is incredibly useful.',
        ],
        'password' => [
            'field' => PasswordField::class,
            'description' => 'Leave this field blank to keep the previous password unchanged',
        ],
        'enabled' => [
            'field' => CheckboxField::class,
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
                    'name',
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
