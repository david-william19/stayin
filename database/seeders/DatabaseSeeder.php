<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'is_mitra' => '0',
                'tempat_lahir' => 'bandung',
                'tanggal_lahir' => '1 Desember 2021',
                'lokasi_terkini' => 'bandung',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Mitra',
                'email' => 'mitra@gmail.com',
                'is_admin' => '0',
                'is_mitra' => '1',
                'tempat_lahir' => 'bandung',
                'tanggal_lahir' => '1 Desember 2021',
                'lokasi_terkini' => 'bandung',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'tempat_lahir' => 'bandung',
                'tanggal_lahir' => '1 Desember 2021',
                'lokasi_terkini' => 'bandung',
                'is_admin' => '0',
                'is_mitra' => '0',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
