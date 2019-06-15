<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'full_name', 'short_name', 'hod', 'contact'
    ];

    public function students()
    {
        return $this->hasMany('App\Student', 'rollfaculty', 'short_name');
    }
}
