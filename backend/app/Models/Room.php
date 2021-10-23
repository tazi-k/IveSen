<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{    
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function chats()
    {
        return $this->belongsTo('App\Chat');
    }
}
