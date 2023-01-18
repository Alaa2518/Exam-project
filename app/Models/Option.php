<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public $question_id ;
    public $option ;
    public $isTure;
    public $timestamps = false;
    protected $fillable = ['id', 'question_id', 'option', 'isTrue'];


    public function question()
    {
        return $this->belongsTo(Question::class);
    }

}
