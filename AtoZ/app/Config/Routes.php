<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */



// User Routes
$routes->get('/', 'UserController::index');
$session = session();
    if (session()->get('isLoggedIn')){
        $routes->get('/', 'UserController::user', ['filter'=>'authGuard']);
        $routes->get('/menu', 'UserController::menu', ['filter'=>'authGuard']);
    }
    else {
        $routes->get('/', 'UserController::user');
        $routes->get('/menu', 'UserController::menu');
    }
$routes->get('/cart', 'UserController::cart', ['filter'=>'authGuard']);
$routes->match(['get', 'post'], "/addtocart", "UserController::addtocart", ['filter' =>'authGuard']);
$routes->match(['get', 'post'], "/addqty", "UserController::addqty", ['filter' =>'authGuard']);


$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout',['filter' => 'authGuard']);

// <----- Admin Routes ---->
$routes->get('/dashboard', 'AdminController::dashboard',['filter' => 'authGuard']);
$routes->get('/bookings', 'AdminController::display_bookings',['filter' => 'authGuard']);
$routes->get('/package', 'AdminController::add_package',['filter' => 'authGuard']);
$routes->post('/new_package', 'AdminController::new_package',['filter' => 'authGuard']);


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
