<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//routes otomatis
$routes->setAutoRoute(false);
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/setting', 'Admin::setting');
