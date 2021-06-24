<?php
use core\Router;

$router = new Router();


$router->get('/', 'HomeController@index');
$router->get('/novo','UsuariosController@add');

// post posso colocar o mesmo nome
$router->post('/novo','UsuariosController@addAction');

$router->get('/usuario/{id}/editar','UsuariosController@edit');
$router->post('/usuario/{id}/editar','UsuariosController@editAction'); //enviando a info 


$router->get('/usuario/{id}/excluir','UsuariosController@del');