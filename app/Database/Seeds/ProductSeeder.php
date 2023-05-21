<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Pepsodent',
            'category'    => 'utlities',
            'price'    => 10000,
            'stock'    => 100,
        ];

        // Simple Queries
        $this->db->table('products')->insert($data);
        
        $data = [
            'name' => 'Aqua',
            'category'    => 'utlities',
            'price'    => 15000,
            'stock'    => 200,
        ];
        // Using Query Builder
        $this->db->table('products')->insert($data);
    }
}