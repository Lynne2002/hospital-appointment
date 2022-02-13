<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Users');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Users::index', ['filter' => 'noauth']);
$routes->get('logout', 'Users::logout');
$routes->match(['get','post'],'register', 'Users::register', ['filter' => 'noauth']);
$routes->match(['get','post'],'profile', 'Users::profile',['filter' => 'auth']);
$routes->get('dashboard', 'Dashboard::index',['filter' => 'auth']);

$routes->get('roles', 'roles::index');
$routes->get('role-add', 'roles::create');
$routes->post('role-store', 'roles::store');
$routes->get('role/edit/(:num)', 'roles::edit/$1');
$routes->post('role/update/(:num)', 'roles::update/$1');
$routes->get('role/delete/(:num)', 'roles::delete/$1');

$routes->get('admin', 'CRUDController::index');
$routes->get('user-add', 'CRUDController::create');
$routes->post('user-store', 'CRUDController::store');
$routes->get('users/edit/(:num)','CRUDController::edit/$1');
$routes->post('users/update/(:num)', 'CRUDController::update/$1');
$routes->get('users/delete/(:num)', 'CRUDController::delete/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
