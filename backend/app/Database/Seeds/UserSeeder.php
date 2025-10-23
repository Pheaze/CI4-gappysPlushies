<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        // if you want password that is hashed
        $password = password_hash('Password123!', PASSWORD_DEFAULT);
            // no need to add id since its auto increment
            $dataYouWannaInsert = [
                [
                    'first_name' => 'Lebron Raymone',
                    'last_name' => 'James',
                    'email' => 'theKing23@gmail.com',
                    'password_hash' => 'TheGoat#23',
                    'type' => 'user',
                    'account_status' => 'active',
                    'gender' => 'Male',
                    'profile_pic' => 'Yes King',
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            ];

            $this->db->table('user')->insertBatch($dataYouWannaInsert);

    }
}
