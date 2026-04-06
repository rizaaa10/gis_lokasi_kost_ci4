<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//routes otomatis
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
// Route for accessing the admin dashboard
$routes->get('/admin', 'Admin::index');
