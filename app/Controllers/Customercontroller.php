<?php

namespace App\Controllers;

class CustomerController
{
    public function index()
    {
        $data = include base_path('database/fake/customers.php');

        return view('admin/customer/index',$data,'partials/template');
    }

    public function create()
    {
        return 'create a new customer';
    }
}