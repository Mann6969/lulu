<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'gender',
        'height',
        'city',
        'state',
        'employed_in',
        'marital_status',
        'fathername',
        'mothername',
        'grandfathername',
        'grandmothername',
        'img',
        'address',
        'occupation',
        'education',
        'annualincome',
        'rashi',
        'nakshatra',
        'religion',
        'caste',
        'subcaste',
        'gotra',
        'manglik',
        'dob',
        'phone',
        'description'
        

    ];
}
