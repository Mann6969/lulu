<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'role_id',
        'user_id'
        
    ];
}
