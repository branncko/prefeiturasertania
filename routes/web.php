<?php

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

Route::get('/', 'NoticiasHomeController@index')->name('home');
Route::get('/index', 'NoticiasHomeController@index')->name('index');
Route::get('/home', 'NoticiasHomeController@index')->name('home');
Route::get('/transparencia', 'HomeController@transparencia')->name('transparencia');
Route::get('/adir-blanc', 'HomeController@adirblank')->name('leiadir');
Route::get('/cadastro-artistico', 'HomeController@cadastroArtistico')->name('cadastro-artistico');

//Route::get('/gerarSenha', function() {
//    return bcrypt('270287');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/arquivo/get/{id}', 'FileController@getFile')->name('arquivo-get');
Route::get('/arquivo/carousel/{id}', 'FileController@getFileCarousel')->name('arquivo-carousel');
Route::get('/arquivo/chamadinhas/{id}', 'FileController@getFileChamadinhas')->name('arquivo-chamadinhas');
Route::get('/campanha/{id}', 'CampanhaController@mostraCampanha')->name('arquivo-campanha');

Route::post('/noticias/busca', 'NoticiasHomeController@noticiasBusca')->name('noticias-busca');
Route::get('/noticias', 'NoticiasHomeController@noticiasLista')->name('noticias');
Route::get('/noticia/{id}/{slug}', 'NoticiasHomeController@leitura')->name('noticias-ler');


Route::get('/acessibilidade', 'HomeController@acessibilidade')->name('acessibilidade');
Route::get('/mapa-site', 'HomeController@mapaSite')->name('mapa-site');
Route::get('/glossario', 'HomeController@glossario')->name('glossario');
Route::get('/cidade', 'HomeController@cidade')->name('cidade');
Route::get('/dados', 'HomeController@dados')->name('dados');
Route::get('/hino', 'HomeController@hino')->name('hino');
Route::get('/exprefeitos', 'HomeController@exprefeitos')->name('exprefeitos');
Route::get('/simbolos', 'HomeController@simbolos')->name('simbolos');

Route::get('/prefeitura', 'HomeController@prefeito')->name('prefeitura');
Route::get('/viceprefeito', 'HomeController@viceprefeito')->name('viceprefeito');

Route::get('/secretarias', 'SecretariasController@home')->name('secretarias');
Route::get('/secretarias/{id}', 'SecretariasController@homeOne')->name('secretarias-one');
Route::get('/orgaos', 'OrgaosController@home')->name('orgaos');
Route::get('/orgaos/{id}', 'OrgaosController@homeOne')->name('orgaos-one');
Route::get('/downloads', 'DownloadsController@home')->name('downloads');
Route::get('/downloads/{id}', 'DownloadsController@getFile')->name('downloads-one');
Route::get('/editais', 'EditaisController@home')->name('editais');
Route::get('/editais/{id}', 'EditaisController@getFile')->name('editais-one');



Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminHomeController@index')->name('admin-home');
    Route::get('/home', 'AdminHomeController@index')->name('admin-home');

    Route::get('/lista','AdminHomeController@listar')->name('admin-lista');

    //    Route::get('/lista/inativos','AdminHomeController@listarInativos')->name('admin-lista-inativos');

    Route::get('/login','AdminAuth\LoginController@showLoginForm')->name('admin-login');
    Route::post('/login','AdminAuth\LoginController@login')->name('admin-login-post');
    Route::post('/logout','AdminAuth\LoginController@logout')->name('admin-logout');
    Route::post('/password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin-password');
    Route::get('/password/reset','AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin-password-reset');
    Route::post ('/password/reset','AdminAuth\ResetPasswordController@reset')->name('admin-password-reset-post');
    Route::get('/password/reset/{token}','AdminAuth\ResetPasswordController@showResetForm')->name('admin-password-reset-token');
    Route::get('/register','AdminAuth\RegisterController@showRegistrationForm')->name('admin-register');
    Route::post('/register','AdminAuth\RegisterController@register')->name('admin-register-post');


        Route::get('/noticia/listar','NoticiasController@index')->name('noticia-lista');
        Route::get('/noticia/cadastro','NoticiasController@create')->name('noticia-cadastro');
        Route::post('/noticia/cadastro','NoticiasController@store')->name('noticia-salva');
        Route::get('/noticia/{id}','NoticiasController@show')->name('noticia-mostra');
        Route::post('/noticia/editar/{id}','NoticiasController@update')->name('noticia-update');
        Route::get('/noticia/deleta/{id}','NoticiasController@destroy')->name('noticia-deleta');

        Route::post('/noticia/buscar','NoticiasController@find')->name('noticia-buscar');

        Route::post('/noticia/imagem','NoticiasController@uploadImagemCorpo')->name('noticia-imagem-corpo');



        Route::get('/cateogoria/listar','CategoriasController@index')->name('categoria-lista');
        Route::post('/cateogoria/buscar','CategoriasController@find')->name('categoria-buscar');
        Route::get('/categoria/cadastro','CategoriasController@create')->name('categoria-cadastro');
        Route::post('/categoria/cadastro','CategoriasController@store')->name('categoria-salva');
        Route::get('/categoria/{id}','CategoriasController@show')->name('categoria-mostra');
        Route::post('/categoria/editar/{id}','CategoriasController@update')->name('categoria-update');
        Route::get('/categoria/deleta/{id}','CategoriasController@destroy')->name('categoria-deleta');

        Route::get('/downloads/listar','DownloadsController@index')->name('downloads-lista');
        Route::post('/downloads/buscar','DownloadsController@find')->name('downloads-buscar');
        Route::get('/downloads/cadastro','DownloadsController@create')->name('downloads-cadastro');
        Route::post('/downloads/cadastro','DownloadsController@store')->name('downloads-salva');
        Route::get('/downloads/{id}','DownloadsController@show')->name('downloads-mostra');
        Route::post('/downloads/editar/{id}','DownloadsController@update')->name('downloads-update');
        Route::get('/downloads/deleta/{id}','DownloadsController@destroy')->name('downloads-deleta');

        Route::get('/editais/listar','EditaisController@index')->name('editais-lista');
        Route::post('/editais/buscar','EditaisController@find')->name('editais-buscar');
        Route::get('/editais/cadastro','EditaisController@create')->name('editais-cadastro');
        Route::post('/editais/cadastro','EditaisController@store')->name('editais-salva');
        Route::get('/editais/{id}','EditaisController@show')->name('editais-mostra');
        Route::post('/editais/editar/{id}','EditaisController@update')->name('editais-update');
        Route::get('/editais/deleta/{id}','EditaisController@destroy')->name('editais-deleta');


        Route::get('/campanhas/listar','CampanhaController@index')->name('campanha-lista');
        Route::post('/campanhas/buscar','CampanhaController@find')->name('campanha-buscar');

        Route::get('/campanhas/cadastro','CampanhaController@create')->name('campanha-cadastro');
        Route::post('/campanhas/cadastro','CampanhaController@store')->name('campanha-salva');
        Route::get('/campanhas/{id}','CampanhaController@show')->name('campanha-mostra');
        Route::post('/campanhas/editar/{id}','CampanhaController@update')->name('campanha-update');
        Route::get('/campanhas/deleta/{id}','CampanhaController@destroy')->name('campanha-deleta');



        Route::get('/orgaos/listar','OrgaosController@index')->name('orgaos-lista');
        Route::get('/orgaos/cadastro','OrgaosController@create')->name('orgaos-cadastro');
        Route::post('/orgaos/cadastro','OrgaosController@store')->name('orgaos-salva');
        Route::get('/orgaos/{id}','OrgaosController@show')->name('orgaos-mostra');
        Route::post('/orgaos/editar/{id}','OrgaosController@update')->name('orgaos-update');
        Route::get('/orgaos/deleta/{id}','OrgaosController@destroy')->name('orgaos-deleta');



        Route::get('/secretarias/listar','SecretariasController@index')->name('secretarias-lista');
        Route::get('/secretarias/cadastro','SecretariasController@create')->name('secretarias-cadastro');
        Route::post('/secretarias/cadastro','SecretariasController@store')->name('secretarias-salva');
        Route::get('/secretarias/{id}','SecretariasController@show')->name('secretarias-mostra');
        Route::post('/secretarias/editar/{id}','SecretariasController@update')->name('secretarias-update');
        Route::get('/secretarias/deleta/{id}','SecretariasController@destroy')->name('secretarias-deleta');



        Route::get('/videos/listar','VideosController@index')->name('videos-lista');
        Route::get('/videos/cadastro','VideosController@create')->name('videos-cadastro');
        Route::post('/videos/cadastro','VideosController@store')->name('videos-salva');
        Route::get('/videos/{id}','VideosController@show')->name('videos-mostra');
        Route::post('/videos/editar/{id}','VideosController@update')->name('videos-update');
        Route::get('/videos/deleta/{id}','VideosController@destroy')->name('videos-deleta');
        
        
        
        Route::post('/uploadImagemCorpo','NoticiasController@uploadImagemCorpo')->name('upload-img');
        
        Route::get('/modal/home','ModalController@modalHome')->name('modal-home');
        Route::post('/modal/home/{id}','ModalController@modalHomeSave')->name('modal-home-post');

});



