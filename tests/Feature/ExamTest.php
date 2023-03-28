<?php

namespace Tests\Feature;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class ExamTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_super_admin()
    {
        User::create([
            'name' => 'moka',
            'email' => 'superAdmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            // password
            'remember_token' => Str::random(10),
            'code' => null,
        ])->assignRole('superAdmin');

        $response = $this->post('/login', [
            'email' => 'superAdmin@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
        $response->isRedirect('/exam/index');

    }
}
