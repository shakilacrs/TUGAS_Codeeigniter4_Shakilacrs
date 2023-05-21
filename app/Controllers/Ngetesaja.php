<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ngetesaja extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Coba aja",
            "name" => "Shakila"
        ];

        echo view('index', $data);
    }
}