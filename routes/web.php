<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::prefix('/admin')->group(function () {

    Route::get('/', 'Controller@index')->name('admin');

    Route::post('/logout', 'Auth\LoginController@logout')->name('sair');

    // USUARIOS
    // visualizar usuarios
    Route::get('/usuarios', 'usuariosController@index')->name('admin.usuarios');
    Route::get('/usuarios/listar', 'usuariosController@listar')->name('usuario.listar');
    // visualizar cadastro
    Route::get('/usuarios/viewCadastrar', 'usuariosController@viewCadastro')->name('usuarios.cadastrar');
    // cadastrado
    Route::post('/usuarios/cadastrado', 'usuariosController@cadastrado')->name('usuario.cadastrado');
    //Editar usuarios
    Route::get('/usuarios/editar/{id}', 'usuariosController@editarUsuario')->name('usuario.editar');
    Route::post('/usuarios/editar/salvar/{id}', 'usuariosController@editarSalvar');
    //Remover usuarios
    Route::get('/usuarios/remover/{id}', 'usuariosController@removerUsuario')->name('usuario.remover');

// CONTAS
// visualizar contas
Route::get('/contas', 'contasController@index')->name('admin.contas');
Route::get('/contas/listar', 'contasController@listar')->name('contas.listar');
// visualizar cadastro
Route::get('/contas/viewCadastrar', 'contasController@viewCadastro')->name('contas.cadastrar');
// cadastrado
Route::post('/usuario/cadastrado', 'contasController@cadastrado')->name('contas.cadastrado');
//Editar contas
Route::get('/contas/editar/{id}', 'contasController@editarConta')->name('contas.editar');
Route::post('/contas/editar/salvar/{id}', 'contasController@editarSalvar');
//Remover contas
Route::get('/contas/remover/{id}', 'contasController@removerConta')->name('contas.remover');

// MES
Route::get('/mes', 'contasController@mes')->name('admin.mes');

    // SERVIÇOS
    // visualizar contas
    Route::get('/servicos', 'servicosController@index')->name('admin.servicos');
    Route::get('/servicos/listar', 'servicosController@listar')->name('servicos.listar');
    // visualizar cadastro
    Route::get('/servicos/viewCadastrar', 'servicosController@viewCadastro')->name('servicos.cadastrar');
    // cadastrado
    Route::post('/usuario/cadastrado', 'servicosController@cadastrado')->name('servicos.cadastrado');
    //Editar servicos
    Route::get('/servicos/editar/{id}', 'servicosController@editarServicos')->name('servicos.editar');
    Route::get('/servicos/relatorio/{id}', 'servicosController@relatorio')->name('servicos.relatorio');
    Route::post('/servicos/editar/salvar/{id}', 'servicosController@editarSalvar');
    //Remover servicos
    Route::get('/servicos/remover/{id}', 'servicosController@removerServicos')->name('servicos.remover');
    Route::get('/servicos/confirm/{id}', 'servicosController@confirm')->name('servicos.confirm');

});
