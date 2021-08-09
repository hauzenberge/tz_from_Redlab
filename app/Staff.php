<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $fillable = ['id', 'name', 'first_name', 'last_name', 'male', 'wage'];
}
