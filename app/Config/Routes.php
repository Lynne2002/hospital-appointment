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
$routes->get('home', 'homepage::index');



$routes->get('admin', 'CRUDController::index', ['filter' => 'auth']);
$routes->get('user-add', 'CRUDController::create');
$routes->post('user-store', 'CRUDController::store');
$routes->get('users/edit/(:num)','CRUDController::edit/$1');
$routes->post('users/update/(:num)', 'CRUDController::update/$1');
$routes->get('users/delete/(:num)', 'CRUDController::delete/$1');

$routes->get('slider', 'sliderController::index');
$routes->get('slider-add', 'sliderController::create');
$routes->post('slider-store', 'sliderController::store');


$routes->get('featured_homes', 'Home_featured::index');
$routes->get('homes-add', 'Home_featured::create');
$routes->post('homes-store', 'Home_featured::store');
$routes->get('homes/edit/(:num)', 'Home_featured::edit/$1');
$routes->post('homes/update/(:num)', 'Home_featured::update/$1');
$routes->get('homes/delete/(:num)', 'Home_featured::delete/$1');

$routes->get('agents', 'agentController::index');
$routes->get('agents-add', 'agentController::create');
$routes->post('agents-store', 'agentController::store');
$routes->get('agents/edit/(:num)', 'agentController::edit/$1');
$routes->post('agents/update/(:num)', 'agentController::update/$1');
$routes->get('agents/delete/(:num)', 'agentController::delete/$1');




$routes->get('house_tour', 'houses_tour::index');
$routes->post('house_tour-store', 'houses_tour::store');

$routes->get('seller-add', 'sellers::create', ['filter' => 'auth']);
$routes->get('seller', 'sellers::create');
$routes->post('seller-store', 'sellers::store');

$routes->get('seller-files', 'sellers::create_2');
$routes->post('files-store', 'upload_files::store');

$routes->get('properties_view', 'properties_view::index', ['filter' => 'auth']);
$routes->post('seller_homes-store', 'homes_uploads::store');

$routes->get('sellersuccess','sellersuccessful::index' );
$routes->get('buyersuccess','buyersuccess::index' );

$routes->get('property_add', 'properties::index');
$routes->get('property_add-add', 'properties::create');
$routes->post('property_add-store', 'properties::store');
$routes->get('property_add/edit/(:num)', 'propertyies::edit/$1');
$routes->post('property_add/update/(:num)', 'propertyies::update/$1');
$routes->get('property_add/delete/(:num)', 'propertyies::delete/$1');

$routes->get('rental', 'rental::index');
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
