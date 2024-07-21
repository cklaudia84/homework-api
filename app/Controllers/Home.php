<?php

namespace App\Controllers;

class Home extends \CodeIgniter\RESTful\ResourceController
{
	protected $format = 'json';
	
    public function index(): string
    {
        return view('welcome_message');
    }
}
