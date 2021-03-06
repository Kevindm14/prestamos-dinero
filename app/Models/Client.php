<?php

namespace App\Models;

use CodeIgniter\Model;

class Client extends Model
{
    protected $table      = 'clients';
    protected $primaryKey = 'id';
    protected $useSoftDeletes = true;
    protected $useAutoIncrement = true;

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $allowedFields = [
        'first_name', 
        'last_name',
        'phone',
        'email'
    ];
}