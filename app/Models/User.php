<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username'
    ];

    protected $guarded = ["id"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
    public function user()
    {
        return $this->hasMany(Question::class);
        return $this->hasMany(QuestionComment::class);
        return $this->hasMany(AnswerComment::class);
    }
    public function like()
    {
        return $this->hasManyThrough(Like::class,  Answer::class);
    }
    public function answer()
    {
        return $this->hasMany(Answer::class);
    }
    public function following()
    {
        return $this->hasMany(Following::class, 'user_id');
    }
    public function follower()
    {
        return $this->hasMany(Following::class, 'follower_id');
    }
}
