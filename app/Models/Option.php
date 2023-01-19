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

    // public $question_id ;
    // public $option ;
    // public $isTure;
    // public $timestamps = false;
    protected $fillable = ['id', 'question_id', 'option', 'isTrue'];


    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    static public function addMCQ(Request $request , int $id){
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
                    'quetion_id' => $id,
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
            'quetion_id' => $id,
            'isTrue' => 'true',
            'option' => $request->trueOrFalse,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_At' => Carbon::now()->toDateTimeString(),
        ]);
        return true;
    }

}
