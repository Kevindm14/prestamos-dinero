<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Prestamo;
use App\Models\Client;

class Prestamos extends BaseController
{
    public function index()
    {
        $prestamo = new Prestamo();
        $prestamos = $prestamo->findAll();
        
        $message = session('message');
        $data = [
            "data" => $prestamos,
            "message" => $message
        ];

        return view('prestamos/index', $data);
    }

    public function new()
    {
        $client = new Client();
        $clients = $client->findAll();

        $prestamoType = [
            "Diario" => "diario",
            "Semanal" => "semanal",
            "Quincenal" => "quincenal",
            "Mensual" => "mensual"
        ];

        $message = session('message');
        $prestamo = [
            "client_id" => "",
            "total_value" => 0,
            "quota_value" => 0,
            "loan_type" => "",
            "quotas" => 0,
            "status" => "nuevo"
        ];
        $data = [
            "message" => $message,
            "data" => $prestamo,
            "clients" => $clients,
            "prestamoType" => $prestamoType
        ];

        return view('prestamos/new', $data, $clients, $prestamoType);
    }

    public function create() {
        $prestamo = new Prestamo();
        $prestamo_bind = $this->request->getPost();

        $prestamo->save($prestamo_bind);

        return redirect()->to(base_url().'/prestamos')->with('message', 'created');
    }

    public function edit($id=null) {
        $prestamo = new Prestamo();
        $data['prestamo'] = $prestamo->find($id);

        return view('prestamos/edit', $data);        
    }

    public function delete($id = null) {
        $prestamo = new Prestamo();

        if ($prestamo->where('id', $id)->delete($id)) {
            return redirect()->to(base_url().'/prestamos')->with('message', 'deleted');
        } else {
            return redirect()->to(base_url().'/prestamos')->with('message', 'error_deleted');
        }
    }
}

