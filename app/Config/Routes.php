<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/cart', 'Cart::index');
$routes->post('/cart', 'Cart::create');
$routes->get('/cart/(:segment)', 'Cart::show/$1');
$routes->post('/cart/(:segment)', 'Cart::update/$1');
$routes->post('/cart/(:segment)/delete', 'Cart::delete/$1');
 