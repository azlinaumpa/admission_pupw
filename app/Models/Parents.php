<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;
    protected $fillable = [
        'ic', 'user_id',
    ];

    public function ic_func()
        {
            return $this->hasMany(User::class, 'id', 'user_id');
        }
}
