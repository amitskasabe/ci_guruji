<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->post('/insert', 'UserController::InsertUser');
// $routes->get('/users' , 'UserController::selectUsers');
// $routes->post('/users/delete' , 'UserController::delete');
// $routes->post('/users/update' , 'UserController::update');
$routes->get('/register' , 'Home::register');
$routes->post('/register' , 'StudentController::register');

$routes->get('/login' , 'Home::login');