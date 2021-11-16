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
        $data = [
            "message" => $message
        ];

        return view('clients/new', $data);
    }

    public function create() {
        $client = new Client();
        $client_bind = $this->request->getPost();
        $createClient = $client->insert($client_bind);

        if ($createClient) {
            return redirect()->to(base_url().'/')->with('message', 'created');
        } else {
            return redirect()->to(base_url().'/new')->with('message', 'error_created');
        }
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
}
