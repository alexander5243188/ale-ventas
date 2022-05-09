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
        //
        User::create([
            'name' => 'Graciela Alejandra',
            'phone' => '3511159550',
            'email' => 'alejandra@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('alejandra')
        ]);
        User::create([
            'name' => 'Alexander Richard',
            'phone' => '3549873214',
            'email' => 'alexander@gmail.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('alexander')
        ]);
    }
}
