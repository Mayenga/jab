<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'JAB Admin',
            'email' => 'admin@jab.go.tz',
            'password' => bcrypt('!Nn0v@t1on'), // Hash the password
        ]);
    }
}
