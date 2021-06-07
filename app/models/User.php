<?php

namespace  App\models;

use Illuminate\Database\Eloquent\Model;

class User extends  Model{
    protected $table = 'users';
    protected $fillable = ['nombre', 'documento', 'email', 'password', 'pais'];

}