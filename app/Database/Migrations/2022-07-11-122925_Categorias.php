<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_categories' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'descripcion' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
        ]);
        $this->forge->addKey('id_categories', true);
        $this->forge->createTable('t_categories');
    }

    public function down()
    {
        $this->forge->dropTable('t_clientes');
    }
}
