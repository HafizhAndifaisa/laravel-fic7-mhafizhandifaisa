<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)->create();

        User::create([
            'name' => 'M. Hafizh Andifaisa',
            'email' => 'hafizhandifaisa@gmail.com',
            'email_verified_at' => now(),
            'role'=>'admin',
            'phone' => '082331033060',
            'bio' => 'oke',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Iwak Dummy',
            'email' => 'dummy@dummy.com',
            'email_verified_at' => now(),
            'role'=>'superadmin',
            'phone' => '082331033060',
            'bio' => 'oke dummy',
            'password' => Hash::make('password')
        ]);
    }
}
