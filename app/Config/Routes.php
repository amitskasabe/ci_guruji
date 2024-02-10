<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/' , 'Home::index');
$routes->get('/dashboard' , 'admin\AdminController::dashboard');
// $routes->get('/admin', 'admin\AdminController::index');
$routes->get('/admin', 'admin\AdminController::loginpage');

$routes->get('courses/(:any)' , 'CourseController::course/$1'); 
$routes->post('admin' , 'admin\adminController::login');   

$routes->post('/blogs' , 'BlogController::blog');

$routes->get('/blogs' , 'BlogController::showBlogs');
// $routes->get('admin' , 'admin\login');