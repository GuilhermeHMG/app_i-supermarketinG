<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas da web para seu aplicativo. Estes
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo grande!
|
*/

/**
 * Rota principal da aplicação, acessando a action 'principal()' dentro da Controller 'PrincipalController'
 */
Route::get('/', 'PrincipalController@principal');

/**
 * Rota da página sobre nós
 */
Route::get('/sobre-nos', 'SobreNosController@sobreNos');

/**
 * Rota da página contato
 */
Route::get('/contato', 'ContatoController@contato');
