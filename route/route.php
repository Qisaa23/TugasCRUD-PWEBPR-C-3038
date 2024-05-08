<?php 
$routes = [];

// Rute dengan parameter
$routes['GET']['/dashboard'] = 'TaskController@read';
$routes['POST']['/create'] = 'TaskController@create';
$routes['GET']['/detail/{id}'] = 'TaskController@getTaskById';
$routes['POST']['/update/{id}'] = 'TaskController@update';
$routes['GET']['/delete/{id}'] = 'TaskController@delete';
$routes['GET']['/insertpage'] = 'TaskController@insertpage';
$routes['GET']['/updatepage/{id}'] = 'TaskController@updatepage';
$routes['GET']['/detailpage/{id}'] = 'TaskController@detailpage';
$routes['GET']['/login'] = 'TaskController@login';
$routes['GET']['/register'] = 'TaskController@register';
?>