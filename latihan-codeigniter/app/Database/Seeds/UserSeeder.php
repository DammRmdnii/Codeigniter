<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Administrator',
                'nis' => '',
                'email' => 'admin@gmail.com',
                'password' => password_hash('pass1234', PASSWORD_BCRYPT),
                'role' => 'admin'
            ],
            [
                'name' => 'Andi Saputra',
                'nis' => 101,
                'email' => 'andi@smkn4bgr.com',
                'password' => password_hash('pass1234', PASSWORD_BCRYPT),
                'role' => 'siswa'
            ]
        ];

        $this->db->table('users')->InsertBatch($data);
    }
}
