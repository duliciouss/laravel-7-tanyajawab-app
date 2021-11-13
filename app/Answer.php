<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'user_id',
        'question_id',
        'answer_body'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
