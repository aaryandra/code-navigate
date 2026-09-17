<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/landing', 'Pages::landing');
$routes->get('/register', 'Home::register');
$routes->post('/register_signup', 'Home::signup');
$routes->get('/login', 'Home::index');
$routes->post('/auth', 'Home::auth');
$routes->get('/logout', 'Home::logout');

$routes->get('/home', 'Pages::index', ['filter' => 'auth']);
// $routes->get('/payment', 'Payment::payment' , ['filter' => 'auth']);
// $routes->get('/pay', 'Payment::pay' , ['filter' => 'auth']);

// Class Routes
$routes->get('/class', 'Pages::class', ['filter' => 'auth']);
$routes->get('/class/class-html', 'ClassController::classHTML', ['filter' => 'auth']);
$routes->get('/class/class-css', 'ClassController::classCSS', ['filter' => 'auth']);
$routes->get('/class/class-js', 'ClassController::classJS', ['filter' => 'auth']);
$routes->get('/class/class-php', 'ClassController::classPHP', ['filter' => 'auth']);
$routes->get('/class/quiz-HTML', 'ClassController::quizHTML', ['filter' => 'auth']);
$routes->get('/class/quiz-CSS', 'ClassController::quizCSS', ['filter' => 'auth']);
$routes->get('/class/quiz-JavaScript', 'ClassController::quizJS', ['filter' => 'auth']);
$routes->get('/class/quiz-PHP', 'ClassController::quizPHP', ['filter' => 'auth']);

// Bootcamp Routes
$routes->get('/bootcamp', 'Pages::bootcamp', ['filter' => 'auth']);
$routes->get('/bootcamp/bc-html', 'BcController::bcHTML', ['filter' => 'auth']);
$routes->get('/bootcamp/bc-css', 'BcController::bcCSS', ['filter' => 'auth']);
$routes->get('/bootcamp/bc-js', 'BcController::bcJS', ['filter' => 'auth']);
$routes->get('/bootcamp/bc-php', 'BcController::bcPHP', ['filter' => 'auth']);

// $routes->get('/history', 'Pages::history', ['filter' => 'auth']);

$routes->get('/admin/data_user', 'ControllerAdmin_dataUser::User', ['filter' => 'auth']);
$routes->get('/admin/data_admin', 'ControllerAdmin_dataAdmin::Admin', ['filter' => 'auth']);
$routes->get('/admin/create_dataAdmin', 'ControllerAdmin_dataAdmin::create', ['filter' => 'auth']);
$routes->post('/dataAdmin_save', 'ControllerAdmin_dataAdmin::save', ['filter' => 'auth']);
$routes->get('/admin/create_dataUser', 'ControllerAdmin_dataUser::create', ['filter' => 'auth']);
$routes->post('/dataUser_save', 'ControllerAdmin_dataUser::save', ['filter' => 'auth']);
$routes->get('/dataAdmin_delete/(:num)', 'ControllerAdmin_dataAdmin::delete/$1', ['filter' => 'auth']);
$routes->get('/dataUser_delete/(:num)', 'ControllerAdmin_dataUser::delete/$1' , ['filter' => 'auth']);
$routes->get('/admin/edit_dataAdmin/(:num)', 'ControllerAdmin_dataAdmin::edit/$1', ['filter' => 'auth']);
$routes->post('/dataAdmin_update/(:num)', 'ControllerAdmin_dataAdmin::update/$1', ['filter' => 'auth']);
$routes->get('/admin/edit_dataUser/(:num)', 'ControllerAdmin_dataUser::edit/$1', ['filter' => 'auth']);
$routes->post('/dataUser_update/(:num)', 'ControllerAdmin_dataUser::update/$1', ['filter' => 'auth']);

$routes->post('/payment/success-payment/(:num)', 'PaymentController::paymentProcess/$1', ['filter' => 'auth']);