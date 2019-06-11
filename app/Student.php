<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'rollyear','rollfaculty','rollno', 'address', 'email', 'phone', 'citizen', 'date_of_birth', 'photo', 'remarks'
    ];
}
