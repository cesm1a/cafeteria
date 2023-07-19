<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class categoriasSeader extends Seeder
{
    public function run()
    {
        $data = [
            'nombre' => 'cristian',
            'descripcion'    => 'el mejor webmaster del mundo',
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('t_categories')->insert($data);
    }
}