<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'exam_id','body','question_type'];

    public function exam(){
        return $this->belongsTo(Exam::class);
    }

    public function options(){
        return $this->hasMany(Option::class, 'quetion_id');
    }
}
