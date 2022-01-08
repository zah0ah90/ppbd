<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'nama' => 'hamzah',
                'nomor_handphone' => '08577777777',
                'email' => 'admin@example.com',
                'level' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'username' => 'wali',
                'nama' => 'maudi',
                'nomor_handphone' => '08577777777',
                'email' => 'user@example.com',
                'level' => 'wali',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}