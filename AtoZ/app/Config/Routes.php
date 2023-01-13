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
// Guest Router
$routes->get('/', 'GuestController::index');
$routes->get('about', 'GuestController::about');
$routes->get('guest_service', 'GuestController::service');
$routes->get('menu', 'GuestController::menu');
$routes->get('pages', 'GuestController::pages');
$routes->get('contact', 'GuestController::contact');
$routes->get('signin', 'GuestController::signin');


 // User Router
$routes->get('/', 'UserController::index');
$routes->get('about', 'UserController::about');
$routes->get('service', 'UserController::service');
$routes->get('menu', 'UserController::menu');
$routes->get('pages', 'UserController::pages');
$routes->get('contact', 'UserController::contact');

$routes->get('/', 'SignupController::index');
$routes->get('/register', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/login', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');
$routes->get('/dashboard', 'ProfileController::index');

<<<<<<< HEAD
// <----- Admin Routes ---->
$routes->get('/dashboard', 'AdminController::dashboard',['filter' => 'authGuard']);
$routes->get('/bookings', 'AdminController::display_bookings',['filter' => 'authGuard']);
$routes->get('/package', 'AdminController::add_package',['filter' => 'authGuard']);
$routes->post('/new_package', 'AdminController::new_package',['filter' => 'authGuard']);

=======
$routes->match(['get', 'post'], '/AllBookings', 'TransactionController::AllBookings',['filter' => 'authGuard']);
$routes->get('/addBookings', 'TransactionController::addBookings',['filter' => 'authGuard']);
$routes->post('/add_Bookings', 'TransactionController::add_Bookings',['filter' => 'authGuard']);
$routes->get('/BookingsData', 'TransactionController::BookingsData',['filter' => 'authGuard']);
$routes->get('/addPackage', 'TransactionController::addPackage',['filter' => 'authGuard']);

$routes->post('/add_package', 'PackageController::add_package',['filter' => 'authGuard']);
$routes->get('/packageDisplay', 'PackageController::packageDisplay',['filter' => 'authGuard']);
>>>>>>> parent of 6765f64 (new path)


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
