<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Fetalvero, Sean Kyle',
                'email' => 'scfetalvero@fit.edu.ph',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Lebron James',
                'email' => 'lebron@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Steve Rogers',
                'email' => 'SteveRogers@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Anne Curtis',
                'email' => 'AnneCurtis@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'James Bentulan',
                'email' => 'JamesBentulan@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', [
            'customers' => $customers
        ]);
    }
}