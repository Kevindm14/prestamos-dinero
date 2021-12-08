<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPrestamos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'client_id'       => [
                'type'       => 'INT',
                'unsigned' => true,
            ],
            'total_value'       => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'quota_value'       => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'loan_type'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'quotas'       => [
                'type'       => 'INT',
                'constraint' => '255',
            ],
            'status'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('client_id', 'clients', 'id');
        $this->forge->createTable('prestamos');
    }

    public function down()
    {
        $this->forge->dropTable('prestamos');
    }
}
