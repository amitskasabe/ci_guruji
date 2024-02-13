<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin/dashboard', 'admin\AdminController::dashboard');
// $routes->get('/admin', 'admin\AdminController::index');
$routes->get('/admin', 'admin\AdminController::loginpage');

$routes->get('/courses', 'CourseController::index');
$routes->get('/courses/(:any)', 'CourseController::math/$1');
$routes->post('admin', 'admin\adminController::login');

$routes->post('/blogs', 'BlogController::blog');

$routes->get('/blogs', 'BlogController::showBlogs');
// $routes->get('admin' , 'admin\login');

$routes->get('admin/student', 'admin\StudentsController::index');

// login route

$routes->get('login', 'Home::login');
// registration route
$routes->get('register', 'Home::register');
// post route for registration
$routes->post('/register', 'Home::signup');
// sign in post 
$routes->post('/signin', 'Home::signin');

// logout

$routes->get('logout', 'Home::logout');

// profile 

$routes->get('profile', 'Home::profile');

$routes->get('about', 'Home::about');

$routes->get('contact', 'Home::contact');

$routes->get('courses', 'Home::courses');

$routes->get('course', 'Home::carers');

$routes->get('careers', 'Home::careers');

$routes->get('learning', 'LearningController::index');

$routes->get('admin/write-blog', 'BlogController::writeBlog');

$routes->post('admin/add-blog', 'BlogController::addBlog');

// upload homework 

$routes->post('upload-homework', 'Home::UploadHomework');