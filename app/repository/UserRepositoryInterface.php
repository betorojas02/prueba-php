<?php
namespace App\repository;


interface UserRepositoryInterface extends RepositoryInterface
{


    public function login($email, $clave);
    public function emailUser($email);

    public function nombreOemail($buscar);

}