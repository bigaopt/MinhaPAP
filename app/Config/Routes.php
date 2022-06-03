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

$routes->get('/admin', 'Admin::pagina_tabela_jogadores'); //pagina menu admin
$routes->get('/inserir_jogador','Admin::pagina_inserir_jogador'); //pagina inserir jogador
$routes->get('/atualizar_jogadores','Admin::pagina_atualizar_dados_jogadores'); //pagina inserir jogadores
$routes->get('/apagar_jogadores','Admin::pagina_apagar_jogadores'); //pagina apagar jogadores
$routes->get('/associar_jogadores','Admin::pagina_associar_jogadores'); //pagina associar jogadores a uma equipa
$routes->get('/inserir_tecnico','Admin::pagina_inserir_tecnico'); //pagina inserir tecnico
$routes->get('/atualizar_tecnico','Admin::pagina_atualizar_tecnico'); //pagina atualizar tecnico
$routes->get('/apagar_tecnico','Admin::pagina_apagar_tecnico'); //pagina apagar tecnico
$routes->get('/associar_tecnico','Admin::pagina_associar_tecnico'); //pagina associar tecnico a uma equipa
$routes->get('/tabela_jogadores','Admin::pagina_tabela_jogadores'); //pagina tabela jogadores
$routes->get('/tabela_tecnicos','Admin::pagina_tabela_tecnicos'); //pagina tabela tecnicos
$routes->get('/tabela_equipas','Admin::pagina_tabela_equipas'); //pagina tabela equipas
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
