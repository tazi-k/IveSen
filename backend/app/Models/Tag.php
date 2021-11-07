<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'ivent_id',
        'tag',
    ];

    public function ivents()
    {
        return $this->hasOne('App\Models\Ivents','ivent_id');
    }
}
