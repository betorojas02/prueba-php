<?php
namespace App\repository;


use  App\models\User;
use App\repository\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    /**
     * PostRepository constructor.
     *
     * @param User $user
     */

    public function __construct(User $user)
    {
        $this->model = $user;
    }
    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function login($email, $clave)
    {
        return $this->model->login($email, $clave);
    }
    public function emailUser($email)
    {
         return $this->model->emailUser($email,);
    }
    public function nombreOemail($buscar)
    {
        return $this->model->nombreOemail($buscar);
    }

}