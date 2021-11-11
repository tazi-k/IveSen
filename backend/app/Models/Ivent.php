<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ivent extends Model
{
    protected $fillable = [
        'draft_user_id',
        'ivent_name',
        'ivent_date',
        'number_of_people',
        'message',
    ];

    public function users()
    {
        return $this->hasOne('App\Models\User','draft_user_id');
    }

    public function tags()
    {
        return $this->belongsTo('App\Models\Tag');
    }

    public function matchings()
    {
        return $this->belongsTo('App\Models\Matching');
    }
}
