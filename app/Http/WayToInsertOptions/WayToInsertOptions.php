<?php

namespace App\Http\WayToInsertOptions;
use App\Enums\QuestionTypeEnum;
use App\Models\Option;
use App\Models\Question;

class WayToInsertOptions{

    private $QuestionType ;
    private $request;


    public function __construct( $request){
        try {
            if ($request)
                $this->request = $request;
                $this->QuestionType = $request->question_type;
            }
        catch(\Exception $e){
            throw $e;
        }


    }

    public function addNewOptions(){
        $id = Question::all()->last()->id;

        if ($this->QuestionType === QuestionTypeEnum::TRUE_OR_FALSE) {

            Option::addTrueOrFales($this->request, $id);

        } else if ($this->QuestionType === QuestionTypeEnum::MCQ) {
            Option::addMCQ($this->request, $id);
        }
    }

    public function updateOptions($oldQType,$newQType,$id){
        if ($oldQType !== $newQType) {

            // first go to the option and delete all rows of this type
            Option::where('question_id', '=', $id)->delete();
            // second tacke all new update and add it as an new options on acreate

            if ($this->QuestionType === QuestionTypeEnum::TRUE_OR_FALSE) {

                Option::addTrueOrFales($this->request, $id);


            } else if ($this->QuestionType === QuestionTypeEnum::MCQ) {
                Option::addMCQ($this->request, $id);
            }

        } else {
            // first ditrmain if type of question true or mcq
            if ($this->QuestionType === QuestionTypeEnum::TRUE_OR_FALSE) {

                Option::updateTrueOrFales($this->request, $id);

            } else if ($this->QuestionType === QuestionTypeEnum::MCQ) {
                Option::updateMCQ($this->request, $id);

            }

        }
    }

}
