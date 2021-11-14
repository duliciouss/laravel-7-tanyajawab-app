<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'user_id',
        'question_title',
        'question_body',
        'question_tag'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function answer()
    {
        return $this->hasMany('App\Answer', 'question_id', 'question_id');
    }
}
