<?php

namespace App\Controllers;

class MainController
{
    public function index()
    {        
        return view('admin/index', null, 'partials/template');
    }

    public function template()
    {
        return view('partials/template');
    }
}