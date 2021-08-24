<?php

    return [

        'path'                  => env('VAULT_PATH', 'vault'),

        'models' => [
            'users' => [
                'name'                   => 'User',
                'label'                  => 'Users',
                'fields'                 => [
                    'name'               => ['create' => 1, 'edit' => 1, 'show' => 1, 'type' => 'input', 'validate' => 'required|min:3'],
                    'password'           => ['create' => 1, 'edit' => 0, 'show' => 0, 'type' => 'password', 'validate' => 'required|string|min:6', 'validate_store' => ''],
                    'email'              => ['create' => 1, 'edit' => 1, 'show' => 1, 'type' => 'input', 'validate' => 'required|email|unique:users,email'],
                    'created_at'         => ['create' => 0, 'edit' => 0, 'show' => 1, 'type' => 'date'],
                    'is_admin'           => ['create' => 1, 'edit' => 1, 'show' => 1, 'type' => 'checkbox'],
                    'notifications_on'   => ['create' => 1, 'edit' => 1, 'show' => 1, 'type' => 'checkbox'],
                ],
            ],
        ],

        'guards' => [
            'admin' => [
                'driver'   => 'session',
                'provider' => 'users',
            ],
        ],

    ];
