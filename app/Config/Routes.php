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

$routes->get('login', 'Users::index', ['filter' => 'noauth']);
$routes->get('logout', 'Users::logout');
$routes->match(['get','post'],'register', 'Users::register', ['filter' => 'noauth']);
$routes->match(['get','post'],'profile', 'Users::profile',['filter' => 'auth']);
$routes->get('home', 'homepage::index', ['filter' => 'noauth']);



$routes->get('admin', 'CRUDController::index', ['filter' => 'auth']);
$routes->get('user-add', 'CRUDController::create');
$routes->post('user-store', 'CRUDController::store');
$routes->get('users/edit/(:num)','CRUDController::edit/$1');
$routes->post('users/update/(:num)', 'CRUDController::update/$1');
$routes->get('users/delete/(:num)', 'CRUDController::delete/$1');

$routes->get('adm', 'admController::index');


$routes->get('hospitals', 'hospitals::index');
$routes->get('hospitals-add', 'hospitals::create');
$routes->post('hospitals-store', 'hospitals::store');
$routes->get('hospitals/edit/(:num)', 'hospitals::edit/$1');
$routes->post('hospitals/update/(:num)', 'hospitals::update/$1');
$routes->get('hospitals/delete/(:num)', 'hospitals::delete/$1');

$routes->get('departments', 'departmentsController::index');
$routes->get('department/add/(:num)', 'departmentsController::add/$1');
$routes->post('departments-store', 'departmentsController::store');
$routes->get('departments/edit/(:num)', 'departmentsController::edit/$1');
$routes->post('departments/update/(:num)', 'departmentsController::update/$1');
$routes->get('departments/delete/(:num)', 'departmentsController::delete/$1');



$routes->get('location-store', 'nearest::store');
$routes->post('nearest-store', 'nearest::index', ['filter' => 'auth']);

$routes->get('appointment/add/(:num)', 'bookAppointment::index/$1');
$routes->post('appointment-store', 'bookAppointment::store');
$routes->get('appointments/view/(:num)', 'bookAppointment::view/$1');

$routes->get('doctors_add', 'adddoctorsController::index');
$routes->get('doctors_add/add/(:num)', 'adddoctorsController::add/$1');
$routes->post('doctors-store', 'adddoctorsController::store');
$routes->get('doctors/edit/(:num)','adddoctorsController::edit/$1');
$routes->post('doctors/update/(:num)', 'adddoctorsController::update/$1');
$routes->get('doctors/delete/(:num)', 'adddoctorsController::delete/$1');

$routes->get('doctorlogin', 'doctor_login::index');
$routes->get('doctor', 'doctorsController::index');
$routes->get('calendar-load', 'doctorsController::load');

$routes->get('contact_us', 'contact::index');

$routes->get('schedule', 'scheduleController::index');
$routes->post('schedule-store', 'scheduleController::store');

$routes->get('appointments', 'appointments::index');

//...


//...







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
