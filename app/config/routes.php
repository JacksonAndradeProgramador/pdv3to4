<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default Controller
$routes->setDefaultController('Welcome');
$routes->setDefaultMethod('index');

// 404 Override
$routes->set404Override('Errors::error_404');

// Translate URI Dashes
$routes->setTranslateURIDashes(false);

// Custom Routes
$routes->get('users', 'Auth\Users::index');
$routes->get('users/create_user', 'Auth\Users::create_user');
$routes->get('users/profile/(:num)', 'Auth\Users::profile/$1');
$routes->get('login', 'Auth\Login::index');
$routes->get('login/(:any)', 'Auth\Login::index/$1');
$routes->get('logout', 'Auth\Logout::index');
$routes->get('logout/(:any)', 'Auth\Logout::index/$1');
$routes->get('register', 'Auth\Register::index');
$routes->get('forgot_password', 'Auth\ForgotPassword::index');
$routes->get('sales/(:num)', 'Sales::index/$1');
$routes->get('products/(:num)', 'Products::index/$1');
$routes->get('purchases/(:num)', 'Purchases::index/$1');
$routes->get('quotes/(:num)', 'Quotes::index/$1');