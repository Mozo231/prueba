<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'name' => 'Nombre de Usuario',
            'email' => 'usuario@example.com',
            'email_verified_at' => '2023-10-10 14:50:47',
            'remember_token' => 'usuario@example.com',
            'password' => bcrypt('contraseña123'),
        ]);
    }
}
