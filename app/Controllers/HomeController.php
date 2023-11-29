<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{

    public function index()
    {

        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la página home'
        ]);
        
    }

}