<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ['title', 'description', 'trainer', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
