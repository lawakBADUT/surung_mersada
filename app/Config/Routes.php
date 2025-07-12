<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('', function ($routes) {
    //Routes landing page
    $routes->get('/', 'HomeController::index');
    $routes->get('/beranda', 'HomeController::index');
});


$routes->group('auth', function ($routes) {
    //Routes autentikasi
    $routes->get('login', 'AuthController::login');
    $routes->post('login', 'AuthController::attemptLogin');
    $routes->get('logout', 'AuthController::logout');
});

$routes->group('admin', function ($routes) {
    //Routes autentikasi
    $routes->get('dashboard', 'AdminController::index');
});


