<?php

namespace Tests\Feature;

use App\Models\Question;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    use RefreshDatabase;
    public function test_redirect_if_not_authntecated()
    { // this function is not in this class
        $response = $this->get('/question/index');

        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    // public function test_questions_page_not_empty(){

    //     $user = User::factory()->create();
    //     $questions =Question::all();
    //     $response = $this->actingAs($user)->get('/question/index');
    //     $response->assertStatus(200);
    //     $response->assertDontSee(__('No Questions'));
    //     $response->assertViewHas('questions',function($collection)use ($questions){
    //         return $collection->contains($questions);
    //     });

    // }

    // public function test_question_deleted(){

    //     $user = User::factory()->create();

    //     $questions = Question::all();
    //     $response = $this->actingAs($user)->get('/question/index');
    //     $response->assertStatus(200);
    //     $response->assertDontSee(__('No Questions'));
    //     $response->assertViewHas('questions', function ($collection) use ($questions) {
    //         return $collection->contains($questions);
    //     });
    // }

    // public function test_login_super_admin(){
    //     User::factory()->create();

    //     $response = $this->post('/login',[
    //         'email'=>'superAdmin@gmail.com',
    //         'password'=>'password'
    //     ]);

    //     $response->assertStatus(302);
    //     $response->isRedirect('/exam/index');

    // }


    // public function test_add_question_edit()
    // {
    //     $user = User::factory()->create();
    //     $question= Question::factory()->create();
    //     $response = $this->actingAs($user)->get('/question/edit/'.$question['id']);
    //     $response->assertStatus(200);

    //     $response->assertSee('value="'.$question['body'].'"',false);
    //     $response->assertSee('value="' . $question['type'] . '"', false);
    // }

    // public function test_add_question_error_redirects_update()
    // {
    //     $user = User::factory()->create();
    //     $question = Question::factory()->create();
    //     $response = $this->actingAs($user)->put('/question/edit/' . $question['id'],[
    //         'body'=>'',
    //         'type'=> ''
    //     ]);
    //     $response->assertStatus(302);
    //     $response->assertSessionHasErrors(['body','type']);
    //     $response->assertInvalid(['body']);

    // }

    // public function test_add_questions_to_database()
    // {
    //     User::factory()->create();
    //     $qustion = [
    //         'exam_id' => 3,
    //         'question_type' => 'true_or_false',
    //         'body' => 'asdfasfiaosd asdlkfaia akslaiena',

    //     ];

    //     $response = $this->post('/login', [
    //         'email' => 'superAdmin@gmail.com',
    //         'password' => 'password'
    //     ]);

    //     $response->assertStatus(302);
    //     $response->assertRedirect('/question/create/3');

    //     $this->assertDatabaseHas('question', $qustion);

    //     $lastQuestion = Question::latest()->first();

    //     $this->assertEquals($lastQuestion->body, $qustion['body']);
    //     $this->assertEquals($lastQuestion->question_type, $qustion['question_type']);

    // }

    // public function test_question_delete_successul(){
    //     $user = User::factory()->create();
    //     $question = Question::factory()->create();
    //     $response = $this->actingAs($user)->delete('/question/delete/' . $question['id']);
    //     $response->assertStatus(302);
    //     $response->assertRedirect('/questions/index/');

    //     $this->assertDatabaseMissing('questions',$question[0]);


    // }



}
