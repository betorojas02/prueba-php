<?php

$route->post('/register-user', 'App\controller\UserController@registro');
$route->post('/login-user', 'App\controller\UserController@login');


$route->get('/users', 'App\controller\UserController@buscarUsuario');
