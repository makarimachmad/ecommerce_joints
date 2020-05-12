<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','email','password'];
}
