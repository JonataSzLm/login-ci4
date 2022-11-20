<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // criar senha: 
        // echo password_hash('Admin', PASSWORD_DEFAULT)
        return view('home');
    }
}
