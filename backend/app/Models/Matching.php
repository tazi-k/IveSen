<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    protected $fillable = [
        'ivent_id',
        'buddy_user_id',
        'status',
        'appeal',
    ];

    public function ivents()
    {
        return $this->hasOne('App\Ivent','ivent_id');
    }
}
