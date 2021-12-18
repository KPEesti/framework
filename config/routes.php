<?php

$routes = [
    '/' => [
        'controller' => 'index',
        'action' => 'index'
    ],
    '/show' => [
        'controller' => 'index',
        'action' => 'show'
    ],
    '/hello' => [
        'controller' => 'helloWorld',
        'action' => 'hello'
    ],
    '/world' => [
        'controller' => 'helloWorld',
        'action' => 'world'
    ],
    '/create/form' => [
        'controller' => 'index',
        'action' => 'createForm'
    ],
    '/create' => [
        'controller' => 'index',
        'action' => 'create'
        ],

    '/agents_Contracts' => [
        'controller' => 'Agents',
        'action' => 'agents'
    ],
    '/agents_Contracts/create_form' => [
        'controller' => 'Agents',
        'action' => 'createForm'
    ],
    '/agents_Contracts/create' => [
        'controller' => 'Agents',
        'action' => 'create'
    ],

    '/apartment_Contracts' => [
        'controller' => 'Apartment',
        'action' => 'apartment'
    ],
    '/apartment_Contracts/create_form' => [
        'controller' => 'Apartment',
        'action' => 'createForm'
    ],
    '/apartment_Contracts/create' => [
        'controller' => 'Apartment',
        'action' => 'create'
    ],
    '/apartment_Contracts/findByID' => [
        'controller' => 'Apartment',
        'action' => 'FindByID'
    ]
];
