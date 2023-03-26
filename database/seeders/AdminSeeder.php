<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // User::truncate();
        User::create([
            'name'=> 'admin',
            'email' => 'superAdmin@gmail.com',
            'email_verified_at' =>now(),
            'password' => Hash::make("password"),// password
            'remember_token' => Str::random(10),
            'code' =>null,
        ])->assignRole('superAdmin');

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("password"), // password
            'remember_token' => Str::random(10),
            'code' => Str::random(4),
        ])->assignRole('user');
    }
}
