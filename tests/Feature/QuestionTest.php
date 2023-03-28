<?php

namespace Tests\Feature;

use App\Models\Question;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    use RefreshDatabase;
    private $user ;
    private $question;

    private function set_up(){
        $this->user = User::create([
            'name' => 'admin',
            'email' => 'superAdmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("password"), // password
            'remember_token' => Str::random(10),
            'code' => null,
        ])->assignRole('superAdmin');

        $this->question = Question::factory(1)->create();
    }
    public function test_redirect_if_not_authntecated_to_show_question()
    { // this function is not in this class
        $response = $this->get('/question/index');

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function test_question_deleted(){

        $this->set_up();

        $this->assertDatabaseHas('questions',$this->question);
        $questions = Question::find(1);

        $response = $this->actingAs($this->user)->delete('options/delete/1/'.$questions['id']);
        $response->assertStatus(200);
        $response->assertStatus(302);
        $response->assertRedirect('/questions/index/');
        $this->assertDatabaseMissing('questions',$this->question);

    }

    public function test_questions_page_not_empty(){

        $this->set_up();

        $questions =Question::all();
        $response = $this->actingAs($this->user)->get('/question/index');
        $response->assertStatus(200);
        $response->assertDontSee(__('No Questions'));
        $response->assertViewHas('questions',function($collection)use ($questions){
            return $collection->contains($questions);
        });

    }

    public function test_add_question_edit()
    {
        $this->set_up();


        $response = $this->actingAs($this->user)->get('/question/edit/'.$this->question['id']);
        $response->assertStatus(200);
        $response->assertSee('value="'.$this->question['body'].'"',false);
        $response->assertSee('value="' . $this->question['type'] . '"', false);
    }

    public function test_add_question_error_redirects_update()
    {
        $this->set_up();

        $response = $this->actingAs($this->user)->put('/question/edit/' . $this->question['id'],[
            'body'=>'',
            'type'=> ''
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['body','type']);
        $response->assertInvalid(['body']);
    }

    public function test_add_questions_to_database()
    {
        $this->set_up();

        $response = $this->post('/login', [
            'email' => 'superAdmin@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/question/create/3');

        $this->assertDatabaseHas('question', $this->question[0]);

        $lastQuestion = Question::latest()->first();

        $this->assertEquals($lastQuestion->body, $this->question['body']);
        $this->assertEquals($lastQuestion->question_type, $this->question['question_type']);

    }

    public function test_question_delete_successul(){
        $this->set_up();

        $question = $this->question;
        $response = $this->actingAs($this->user)->delete('/question/delete/' . $question['id']);
        $response->assertStatus(302);
        $response->assertRedirect('/questions/index/');

        $this->assertDatabaseMissing('questions',$question[0]);
         $response->assertDontSee(__('No Questions'));
        $response->assertViewHas('questions', function ($collection) use($question) {
            return $collection->contains($question);
        });

    }





}
