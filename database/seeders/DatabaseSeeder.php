<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
            User::Create([
                'name' => 'Administrador',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'nombreCompleto' => 'Marco Monta Seed',
                'celular' => '0990329245',
                'cedula' => '0000000000',
            ]);
    }
}
