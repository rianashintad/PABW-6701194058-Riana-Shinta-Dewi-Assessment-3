<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SimpleSeeder extends Seeder
{
        public function run()
        {
                $data = [
                        'judul' => 'Ibu',
                        'penulis'    => 'riana'
                        'penerbit'    => 'erlangga'
                        'harga'    => '100000'
                        'stok'    => '1'
                ];

                // Simple Queries
                $this->db->query("INSERT INTO barang (judul, penulis, penerbit, harga, stok) VALUES(:judul:, :penulis:, :penerbit:, :harga:, :stok:)", $data);

                // Using Query Builder
                $this->db->table('users')->insert($data);
        }
}