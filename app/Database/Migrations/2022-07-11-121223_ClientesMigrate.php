<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ClientesMigrate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cifcl' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'apellido' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
        ]);
        $this->forge->addKey('cifcl', true);
        $this->forge->createTable('t_clientes');
    }

    public function down()
    {
        $this->forge->dropTable('t_clientes');
    }
}
