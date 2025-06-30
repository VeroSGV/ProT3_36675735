<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal_ultimo', 'Home::index');
$routes->get('Nosotros', 'Home::Nosotros');
$routes->get('login', 'Home::login');


