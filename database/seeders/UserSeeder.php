<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admininastro',
            'email' => 'admin@gmail.com',
            'password' =>'123456789',
        ]);

        User::create([
            'name' => 'lucas',
            'email' => 'lucas@gmail.com',
            'password' =>'123456789',
        ]);
          
        }
}
