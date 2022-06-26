<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'ini adalah admin',
            'email' => 'admin@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('admin123')
            ],
            [
                'username' => 'user',
                'name' => 'ini adalah user',
                'email' => 'user@gmail.com',
                'level' => 'user',
                'password' => bcrypt('user123')
            ],
            [
                'username' => 'guru',
                'name' => 'ini adalah guru',
                'email' => 'guru@gmail.com',
                'level' => 'guru',
                'password' => bcrypt('guru123')
            ]
            ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
