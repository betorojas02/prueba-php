<?php

$route->post('/register-user', 'App\controller\UserController@registro');
$route->post('/login-user', 'App\controller\UserController@login');


$route->get('/users', 'App\controller\UserController@buscarUsuario');

$route->get('', function (){
    $loader = new Twig_Loader_Filesystem('app\resources\views');
    $twig = new Twig_Environment($loader);
    echo $twig->render('index.html');

});


$route->get('/registro', function (){
    $loader = new Twig_Loader_Filesystem('app\resources\views');
    $twig = new Twig_Environment($loader);
    echo $twig->render('registro.html');

});


