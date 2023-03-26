<?php

namespace Tests\Feature;

use App\Models\Question;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

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

    public function test_questions_page_not_empty(){

        $user = User::factory()->create();

        $questions =Question::get();
        $response = $this->actingAs($user)->get('/question/index');
        $response->assertStatus(200);
        $response->assertDontSee(__('No Questions'));
        $response->assertViewHas('questions',function($collection)use ($questions){
            return $collection->contains($questions);
        });

    }

    public function test_question_deleted(){

        $user = User::factory()->create();

        $questions = Question::get();
        $response = $this->actingAs($user)->get('/question/index');
        $response->assertStatus(200);
        $response->assertDontSee(__('No Questions'));
        $response->assertViewHas('questions', function ($collection) use ($questions) {
            return $collection->contains($questions);
        });
    }


}
