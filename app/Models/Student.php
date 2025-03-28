<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 'student_id_number', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
