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
$routes->setDefaultController('Home');
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

// Clients routes
$routes->get('/', 'Home::index');
$routes->get('/new', 'Home::new');
$routes->post('/create', 'Home::create');
$routes->get('/edit/(:num)', 'Home::edit/$1');
$routes->get('/delete/(:num)', 'Home::delete/$1');
$routes->post('/updateAll', 'Home::updateAll');
$routes->get('/client/(:num)', 'Home::showClient');

// Prestamos Routes
$routes->get('/prestamos', 'Prestamos::index');
$routes->get('/prestamos/new', 'Prestamos::new');
$routes->post('/prestamos/create', 'Prestamos::create');
$routes->get('/prestamos/edit/(:num)', 'Prestamos::edit/$1');
$routes->get('/prestamos/delete/(:num)', 'Prestamos::delete/$1');
$routes->post('/prestamos/updateAll', 'Prestamos::updateAll');
$routes->get('/prestamos/(:num)', 'Prestamos::showClient');

// Sign in and Sign Up Routes
$routes->get('/signup', 'SignupController::index');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/logout', 'SigninController::logout');

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
