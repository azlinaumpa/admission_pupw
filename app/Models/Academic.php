<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;

    protected $table = 'academic';

    public function ic_func()
        {
            return $this->hasMany(User::class, 'id', 'user_id');
        }
}
