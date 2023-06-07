<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerReply extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comment()
    {
        return $this->hasMany(QuestionComment::class);
    }
}
