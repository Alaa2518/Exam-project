<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name'=> 'admin',
            'email' => 'superAdmin@gmail.com',
            'email_verified_at' =>now(),
            'user_type'=>1,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',// password
            'remember_token' => Str::random(10),
        ])->assignRoel('superAdmin');
    }
}
