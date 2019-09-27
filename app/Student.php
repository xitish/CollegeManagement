<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'rollyear','rollfaculty','rollno', 'address', 'email', 'phone', 'citizen', 'date_of_birth', 'photo', 'remarks'
    ];

    public function department()
    {
        return $this->belongsTo('App\Department', 'rollfaculty', 'short_name');
    }
}
