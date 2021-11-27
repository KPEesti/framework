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
    '/agents_Contracts' => [
        'controller' => 'Agents',
        'action' => 'agents'
    ],
    '/agents_Contracts/create' => [
        'controller' => 'Agents',
        'action' => 'createForm'
    ]
];
