<?php

namespace  App\models;

use Illuminate\Database\Eloquent\Model;

class User extends  Model{
    public $timestamps = false;
    protected $table = 'users';
    protected $fillable = ['nombre', 'documento', 'email', 'password', 'pais'];


    public function scopeDocumento($query , $documento)
    {
        return $query->where('documento', '=', $documento)->exists();
    }

    public function scopeEmail($query , $email)
    {
        return $query->where('email', '=', $email)->exists();
    }

    public function scopeEmailUser($query , $email)
    {
        return $query->where('email', '=', $email)->first();
    }



    public function scopeNombreOEmail($query, $buscar){

        return $query->where('email' ,'like', '%' . $buscar . '%')->orWhere('nombre', 'like', '%' . $buscar . '%')->get();
    }
}