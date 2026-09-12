<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'GOAT',
                'full_name' => 'Messi',
                'role' => 'Administrator'
            ],
            [
                'username' => 'light',
                'full_name' => 'Light Yagami',
                'role' => 'Cashier'
            ],
            [
                'username' => 'FoundingTitan',
                'full_name' => 'Eren Jaeger',
                'role' => 'Cashier'
            ],
            [
                'username' => 'Spiderman',
                'full_name' => 'Peter Parker',
                'role' => 'Manager'
            ],
            [
                'username' => 'Gwen',
                'full_name' => 'Zendeya',
                'role' => 'Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}