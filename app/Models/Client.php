<?php

namespace App\Models;

use CodeIgniter\Model;

class Client extends Model
{
    protected $table      = 'clients';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $allowedFields = [
        'first_name', 
        'last_name',
        'phone',
        'email'
    ];

    protected $validationRules    = [
        'first_name'     => 'required|alpha_numeric_space|min_length[3]',
        'last_name'     => 'required|alpha_numeric_space|min_length[3]',
        'phone'     => 'required|alpha_numeric_space|min_length[10]',
        'email'        => 'required|valid_email|is_unique[users.email]'
    ];
}