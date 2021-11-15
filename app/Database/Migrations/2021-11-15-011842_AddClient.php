<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddClient extends Migration
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
            'first_name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'last_name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'phone'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('clients');
    }

    public function down()
    {
        $this->forge->dropTable('clients');
    }
}