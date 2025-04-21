<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Hello extends BaseController
{
    public function index()
    {
        $data['users'] = 'test';
        $data['title'] = 'Hello';
        return view('hello_view', $data);
    }
}
