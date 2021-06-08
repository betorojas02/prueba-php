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
     * @param User $post
     */
    function __construct()
    {
        //obtengo un array con los parámetros enviados a la función
        $params = func_get_args();
        //saco el número de parámetros que estoy recibiendo
        $num_params = func_num_args();
        //cada constructor de un número dado de parámtros tendrá un nombre de función
        //atendiendo al siguiente modelo __construct1() __construct2()...
        $funcion_constructor ='__construct'.$num_params;
        //compruebo si hay un constructor con ese número de parámetros
        if (method_exists($this,$funcion_constructor)) {
            //si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
            call_user_func_array(array($this,$funcion_constructor),$params);
        }
    }
    public function __construct1(User $user)
    {
        $this->model = $user;
    }
    public function __construct2()
    {

    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

}