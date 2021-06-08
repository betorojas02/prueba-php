<?php

namespace App\controller;

use App\models\User;
use App\repository\UserRepository;

use App\helper\Validaciones;

class  UserController
{
    /** @var UserRepositoryInterface */
    private $repository;


    public function registro()
    {


        try {


            $errores = [];

            if (!Validaciones::validarRequerido($_POST['nombre'])) {
                $errores[] = "el nombre es requerido";
            }

            if (!Validaciones::validaCaracteresMinimo($_POST['nombre'], 3)) {
                $errores[] = "el nombre tiene que ser mayor a 3 caracteres ";
            }

            if (!Validaciones::validarRequerido($_POST['documento'])) {
                $errores[] = "el documento es requerido";
            }

            if (User::documento($_POST['documento'])) {
                $errores[] = "El documento tiene que ser unico";
            }
            if (!Validaciones::validarRequerido($_POST['pais'])) {
                $errores[] = "el pais es requerido";
            }

            if (!Validaciones::validaEmail($_POST['email'])) {
                $errores[] = "tiene que ser un email valido";
            }
            if (User::email($_POST['email'])) {
                $errores[] = "El email tiene que ser unico";
            }

            if (!Validaciones::validaCaracteresMinimo($_POST['password'], 6)) {
                $errores[] = "el password tiene que ser mayor a 6 caracteres ";
            }

            if (!Validaciones::validarRequerido($_POST['password'])) {
                $errores[] = "el password es requerido";
            }


            if ($errores) {
                echo json_encode([
                    'status' => true,
                    'data' => $errores,
                ], 200);
            } else {
                $this->repository = new  UserRepository(new User);

                $user = [
                    'nombre' => $_POST['nombre'],
                    'documento' => $_POST['documento'],
                    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
                    'pais' => $_POST['pais'],
                    'email' => $_POST['email'],
                ];
                $this->repository->create($user);
                echo json_encode([
                    'status' => true,
                    'data' => $user,

                ], 204);
            }


        } catch (\Exception $e) {
            echo json_encode([
                'status' => false,

                'errors' => [
                    'message' => $e->getMessage()
                ]
            ], 500);
        }
    }

    public function login()
    {

        try {
            $this->repository = new  UserRepository(new User);
            $user = $this->repository->EmailUser($_POST['email']);
            $passwordIgual = password_verify($_POST['password'], $user->password);

            if ($passwordIgual) {
                echo json_encode([
                    'status' => true,
                    'data' => [
                        'start' => 1
                    ],
                ], 200);
            } else {
                echo json_encode([
                    'status' => false,
                    'data' => [
                        'mesagge' => 'usuario o clave incorrectos2',
                        'start' => 0
                    ],


                ], 200);
            }
        } catch (\Exception $e) {
            echo json_encode([
                'status' => false,
                'data' => [
                    'mesagge' => 'usuario o clave incorrectos1',
                    'start' => 0
                ],


            ], 200);
        }


    }

    public function buscarUsuario () {
        $this->repository = new  UserRepository(new User);
        $users = $this->repository->NombreOEmail($_GET['buscar']);

        echo json_encode([
            'status' => true,
            'data' => $users
        ], 200);
    }

}

