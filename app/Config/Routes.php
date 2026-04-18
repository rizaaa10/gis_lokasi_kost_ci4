<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// routes manual
$routes->setAutoRoute(true);

// PUBLIC
$routes->get('/', 'Home::index');

// ADMIN
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/setting', 'Admin::setting');
$routes->post('/admin/updatesetting', 'Admin::UpdateSetting');

// WILAYAH (TAMBAHKAN INI)
$routes->get('/wilayah', 'Wilayah::index');
$routes->post('/wilayah/insertdata', 'Wilayah::InsertData');