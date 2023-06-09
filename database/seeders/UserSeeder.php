<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ## ADMINS ##
        # id: 1
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'phone_number' => '01000000000',
            'address' => 'basra',
            'is_admin' => true,
        ]);
        ## employee ##
        # id: 1
        User::create([
            'name' => 'Admin',
            'email' => 'employee@gmail.com',
            'password' => bcrypt('123456'),
            'phone_number' => '01000000000',
            'address' => 'basra',
            'is_admin' => true,
        ]);
        ## USERS ##
        # id: 2
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456'),
            'phone_number' => '01000000000',
            'address' => 'basra',
        ]);
    }
}
