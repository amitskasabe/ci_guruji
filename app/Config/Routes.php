<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/' , 'Home::index');
$routes->get('/dashboard' , 'admin\AdminController::dashboard');
// $routes->get('/admin', 'admin\AdminController::index');
$routes->get('/admin', 'admin\AdminController::login');

$routes->get('courses/(:any)' , 'CourseController::math/$1');    

// $routes->get('admin' , 'admin\login');