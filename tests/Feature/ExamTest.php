<?php

namespace Tests\Feature;

use App\Models\Exam;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class ExamTest extends TestCase
{
    use RefreshDatabase;

    private $user;
    private $exam ;

    private function set_up()
    {
        $this->user = User::create([
            'name' => 'admin',
            'email' => 'superAdmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            // password
            'remember_token' => Str::random(10),
            'code' => null,
        ])->assignRole('superAdmin');

        $this->exam = Exam::factory(1)->create();
    }
    public function test_redirect_if_not_authntecated_to_show_exam()
    { // this function is not in this class
        $response = $this->get('/exam/index');

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function test_exam_deleted()
    {

        $this->set_up();

        $this->assertDatabaseHas('exams', $this->exam);
        $exam = Exam::find(1);

        $response = $this->actingAs($this->user)->delete('exam/delete/1/' . $exam['id']);
        $response->assertStatus(200);
        $response->assertStatus(302);
        $response->assertRedirect('/exam/index/');
        $this->assertDatabaseMissing('exams', $this->exam);

    }

    public function test_exams_page_not_empty()
    {

        $this->set_up();

        $exams = Exam::all();
        $response = $this->actingAs($this->user)->get('/exam/index');
        $response->assertStatus(200);
        $response->assertDontSee(__('No Exam'));
        $response->assertViewHas('exams', function ($collection) use ($exams) {
            return $collection->contains($exams);
        });

    }

    public function test_add_exam_edit()
    {
        $this->set_up();


        $response = $this->actingAs($this->user)->get('/exam/edit/' . $this->exam['id']);
        $response->assertStatus(200);
        $response->assertSee('value="' . $this->exam['title'] . '"', false);

    }

    public function test_add_exam_error_redirects_update()
    {
        $this->set_up();

        $response = $this->actingAs($this->user)->put('/exam/edit/' . $this->exam['id'], [
            'title' => ''
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['title']);
        $response->assertInvalid(['title']);
    }

    public function test_add_exams_to_database()
    {
        $this->set_up();

        $response = $this->post('/login', [
            'email' => 'superAdmin@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/exam/create/3');

        $this->assertDatabaseHas('exams', $this->exam[0]);

        $lastExam = Exam::latest()->first();

        $this->assertEquals($lastExam->body, $this->exam['title']);


    }

    public function test_exam_delete_successul()
    {
        $this->set_up();

        $exam = $this->exam;
        $response = $this->actingAs($this->user)->delete('/exam/delete/' . $exam['id']);
        $response->assertStatus(302);
        $response->assertRedirect('/exam/index/');

        $this->assertDatabaseMissing('exam', $exam[0]);
        $response->assertDontSee(__('No Exams'));
        $response->assertViewHas('exams', function ($collection) use ($exam) {
            return $collection->contains($exam);
        });

    }
}
