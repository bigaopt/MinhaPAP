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
$routes->get('/associar_jogadores','Admin::pagina_associar_jogadores'); //pagina associar jogadores a uma equipa
$routes->get('/inserir_tecnico','Admin::pagina_inserir_tecnico'); //pagina inserir tecnico
$routes->get('/associar_tecnico','Admin::pagina_associar_tecnico'); //pagina associar tecnico a uma equipa
$routes->get('/tabela_jogadores','Admin::pagina_tabela_jogadores'); //pagina tabela jogadores
$routes->get('/tabela_tecnicos','Admin::pagina_tabela_tecnicos'); //pagina tabela tecnicos
$routes->get('/tabela_equipas','Admin::pagina_tabela_equipas'); //pagina tabela equipas
$routes->get('/inserir_equipa','Admin::pagina_inserir_equipa'); //pagina inserir equipa
$routes->get('/tabela_jogos','Admin::pagina_tabela_jogos'); //pagina tabela jogos 
$routes->get('/inserir_jogo','Admin::pagina_inserir_jogo'); //pagina inserir jogo
$routes->get('/tabela_clubes','Admin::pagina_tabela_clubes'); //pagina tabela clube
$routes->get('/inserir_clube','Admin::pagina_inserir_clube');

$routes->get('atualizar_tecnico/(:num)','Admin::pagina_atualizar_tecnico/$1'); // atualizar tecnico
$routes->get('apagar_tecnico/(:num)','Admin::apagar_tecnico/$1'); //apaga tecnico
$routes->get('atualizar_jogadores/(:num)','Admin::pagina_atualizar_dados_jogadores/$1'); //atualizar jogadores
$routes->get('apagar_jogadores/(:num)','Admin::apagar_jogadores/$1'); //apagar jogadores
$routes->get('apagar_equipas/(:num)','Admin::apagar_equipa/$1'); //apagar equipas
$routes->get('atualizar_equipa/(:num)','Admin::pagina_atualizar_equipa/$1');//atualizar equipa
$routes->get('apagar_jogo/(:num)','Admin::apagar_jogo/$1'); //apagar jogos
$routes->get('apagar_clube/(:num)','Admin::apagar_clube/$1'); //apagar clube


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
