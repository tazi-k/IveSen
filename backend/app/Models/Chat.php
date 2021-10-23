<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'room_id',
        'chat',
    ];

    public function users()
    {
        return $this->hasOne('App\User','user_id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room','room_id');
    }
}
