<?php

namespace App\Controllers;

use App\Models\Client;

class Home extends BaseController
{
    public function index()
    {
        $tasks = new Client();
        $lists = $tasks->findAll();
        
        $message = session('message');
        $data = [
            "data" => $lists,
            "message" => $message
        ];

        return view('clients/index', $data);
    }

    public function new()
    {
        $message = session('message');
        $client = [
            "first_name" => "",
            "last_name" => "",
            "phone" => "",
            "email" => ""
        ];
        $data = [
            "message" => $message,
            "data" => $client
        ];

        return view('clients/new', $data);
    }

    public function create() {
        $client = new Client();
        $client_bind = $this->request->getPost();
        $validate = $this->validate([
            'first_name'     => 'required|alpha_numeric_space|min_length[3]',
            'last_name'     => 'required|alpha_numeric_space|min_length[3]',
            'phone'     => 'required|alpha_numeric_space|min_length[10]',
            'email'        => 'required|valid_email|is_unique[clients.email]'
        ]);

        if (!$validate) {
            return view('clients/new', [
                'validation' => $this->validator,
                'data' => $client_bind
            ]);
        }

        $client->save($client_bind);

        return redirect()->to(base_url().'/')->with('message', 'created');
    }

    public function edit($id=null) {
        $client = new Client();
        $data['client'] = $client->find($id);

        return view('clients/edit', $data);        
    }

    public function updateAll() {
        $client = new Client();
        $client_bind = $this->request->getPost();

        if ($client->update($client_bind['id'], $client_bind)) {
            return redirect()->to(base_url().'/')->with('message', 'updated');
        } else {
            return redirect()->to(base_url().'/')->with('message', 'error_updated');
        }
    }

    public function delete($id = null) {
        $client = new Client();

        if ($client->where('id', $id)->delete($id)) {
            return redirect()->to(base_url().'/')->with('message', 'deleted');
        } else {
            return redirect()->to(base_url().'/')->with('message', 'error_deleted');
        }
    }

    public function showClient($id = null) {
        $client = new Client();
        $data["data"] = $client->find($id);

        if (!$data) {
            return print_r("Usuario no encontrado");
        }

        return view("clients/show", $data);
    }
}
