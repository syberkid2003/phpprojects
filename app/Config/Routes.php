<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::showLogin');
$routes->post('/', 'AuthController::login');

$routes->get('/register', 'AuthController::showRegister');
$routes->post('/register', 'AuthController::register');

$routes->get('/logout', 'AuthController::logout');
