<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/', 'Home::index');

$routes->get('/level','level::index');
//$routes->get('/pelajaran','pelajaran::index');
$routes->get('/create','level::create');
$routes->get('/edit','level::edit');
$routes->get('/pelajaran','pelajaran::index');
$routes->get('/create','pelajaran::create');
$routes->get('/edit','pelajaran::edit');
$routes->get('/student','student::index');
$routes->get('/create','student::create');
$routes->get('/edit','student::edit');
$routes->get('/teacher','teacher::index');
$routes->get('/create','teacher::create');
$routes->get('/edit','teacher::edit');
$routes->get('/paket','paket::index');

$routes->get('/create','paket::create');
$routes->get('/edit','paket::edit');
//$routes->get('/daftar','level::index2');
$routes->get('/index', 'benkyou::index');
$routes->get('/about', 'benkyou::about');
$routes->get('/benkyou', 'benkyou::index');
$routes->get('/teachers', 'benkyou::teachers');
$routes->get('/courses', 'benkyou::courses');
$routes->get('/detail', 'benkyou::detail/$1');
$routes->get('/contact', 'benkyou::contact');
$routes->get('/data', 'benkyou::data');

$routes->get('/index2', 'belajar::index2');
$routes->get('/kelas', 'belajar::kelas');
$routes->get('/login', 'user::login');
$routes->get('/register', 'user::register');
$routes->get('/user', 'user::user');


// $routes->get('/komik/(:segment)','Komik::detail/$1');
// $routes->get('/create','komik::create');
// $routes->get('/save','komik::save');
// $routes->delete('/komik/(num)','komik::delete/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
