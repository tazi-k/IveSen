<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use backend\app\Http\Controllers\Auth\RegisterController;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'sex',
        'age',
        'email',
        'password',
        'sns',
        'profile',
        'prefecture_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function prefectures()
    {
        return $this->hasOne('App\Prefecture','prefecture_id');
    }

    public function images()
    {
        return $this->belongsToMany('App\Image')->withTimestamps();;
    }

    public function rooms()
    {
        return $this->hasMany('App\Room')->withTimestamps();
    }

    public function chats()
    {
        return $this->hasMany('App\Chat')->withTimestamps();
    }
}
