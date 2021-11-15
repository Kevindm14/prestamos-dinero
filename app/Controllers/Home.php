<?php

namespace App\Controllers;

use App\Models\Client;

class Home extends BaseController
{
    public function index()
    {
        $tasks = new Client();
        $lists = $tasks->findAll();
        $data = [
            "data" => $lists
        ];

        return view('clients/index', $data);
    }

    public function new()
    {
        return view('clients/new');
    }
}
