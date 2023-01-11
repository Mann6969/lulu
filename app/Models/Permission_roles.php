<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission_roles extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'role_id',
        'permission_id'
        
    ];
}
