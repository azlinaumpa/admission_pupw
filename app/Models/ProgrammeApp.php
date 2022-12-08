<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammeApp extends Model
{
    use HasFactory;
    protected $table = 'programme_app';

    public function ic_func()
        {
            return $this->hasMany(User::class, 'id', 'user_id');
        }
}
