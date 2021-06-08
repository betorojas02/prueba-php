<?php
namespace  App\controller;
use App\models\User;
use App\repository\UserRepository;

class  UserController {
    /** @var UserRepositoryInterface */
    private $repository;

    public function __construct(   )
    {


    }

    public function  registro () {


        try{


            $this->repository = new  UserRepository( new User);

            $user1 = [
                'nombre' => $_POST['nombre'],
                'documento' => $_POST['documento'],
                'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                'pais' => $_POST['pais'],
            ];
            $this->repository->create($user1);
            echo json_encode([
                'status' => true,
                'data' => $user1,
                'errors' => []
            ], 204);
        }catch (\Exception $e){
            echo json_encode([
                'status' => false,
                'data' => '',
                'errors' => [
                    'message' => $e->getMessage()
                ]
            ],500);
        }
    }

}

