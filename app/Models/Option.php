<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class Option extends Model
{
    use HasFactory;


    protected $fillable = ['id', 'question_id', 'option', 'isTrue'];




    static public function  addMCQ(Request $request , int $id){
            $data=array();
            $istrue="False";
            for ($i =1 ; $i<=(int)$request->MCQ_number;$i++){

                if ($request['true_Option_'.$i] === 'true') {
                    $istrue = 'True';

                }
                else {
                    $istrue = 'False';
                }
                $row = [
                    'option' => $request['option_'.$i],
                    'isTrue' => $istrue,
                    'question_id' => $id,
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_At' => Carbon::now()->toDateTimeString(),
                ];

                array_push($data, $row );

            }
            DB::table('options')->insert($data);
            return true;
    }

    static public function addTrueOrFales(Request $request, int $id)
    {

        // ADD true row if type of question true or false
        DB::table('options')->insert([
            'question_id' => $id,
            'isTrue' => 'true',
            'option' => $request->trueOrFalse,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_At' => Carbon::now()->toDateTimeString(),
        ]);
        return true;
    }

    static public function updateTrueOrFales(Request $request, int $id){

        DB::table('options')
        ->where('question_id', $id)
        ->limit(1)
        ->update(array('option' => $request->trueOrFalse,
                        'isTrue' =>"True"
                        ));
        return true ;
    }

    static public function updateMCQ(Request $request, int $id){
        // det all options from data base
            $options = DB::table('options')->where('question_id', $id)->get();
        // update data and send it to database

        for ($i = 1 ; $i<=(int)count($options);$i++) {
            if ($request['true_Option_'.$i] === 'true') {

                    $data = array(
                        'option'=>$request['option_'.$i],
                        'isTrue'=>'True',
                    );
                    Option::where('id',$options[$i-1]->id)
                    ->update($data);
                }
                else {
                    $data = array(
                        'option'=>$request['option_'.$i],
                        'isTrue'=>'False',
                    );
                    Option::where('id',$options[$i-1]->id)
                    ->update($data);
                }

                }


    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }





}
