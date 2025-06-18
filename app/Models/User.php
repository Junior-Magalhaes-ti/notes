<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function Notes()
    {
        return $this->hasMany(Note::class);
    }
}
