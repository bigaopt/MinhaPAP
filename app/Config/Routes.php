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
$routes->setDefaultController('Main');
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
$routes->get('/', 'Main::index');
$routes->get('/inicio', 'Main::index');
$routes->get('/clube', 'Main::clube');
$routes->get('/noticias', 'Main::noticias');
$routes->get('/loja', 'Main::loja');
$routes->get('/seniores', 'Main::seniores');
$routes->get('/juniores', 'Main::juniores');


$routes->get('/login', 'Users::index'); //pagina login
$routes->get('/registo','Users::index_registo'); //pagina registo
$routes->get('/entrou', 'Users::logado'); //pagina depois de tar logado
$routes->get('/logout', 'Users::logout'); //pagina para dar logout

$routes->get('/admin', 'Admin::index'); //pagina menu admin
$routes->get('/inserir_jogador','Admin::inserir_jogador'); //pagina inserir jogador

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
