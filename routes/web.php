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



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/arquivo/get/{id}', 'FileController@getFile')->name('arquivo-get');
Route::get('/arquivo/carousel/{id}', 'FileController@getFileCarousel')->name('arquivo-carousel');
Route::get('/arquivo/chamadinhas/{id}', 'FileController@getFileChamadinhas')->name('arquivo-chamadinhas');

Route::post('/noticias/busca', 'NoticiasHomeController@noticiasBusca')->name('noticias-busca');
Route::get('/noticias', 'NoticiasHomeController@noticiasLista')->name('noticias');
Route::get('/noticia/{id}/{slug}', 'NoticiasHomeController@leitura')->name('noticias-ler');

Route::get('/turista', function() {
    return view('site.turismo');
})->name('turista');

Route::get('/empresa', function() {
    return view('site.empresa');
})->name('empresa');

Route::get('/sic', function() {
    return view('site.sic');
})->name('sic');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminHomeController@index')->name('admin-home');
    Route::get('/home', 'AdminHomeController@index')->name('admin-home');

    Route::get('/lista','AdminHomeController@listar')->name('admin-lista');
    Route::get('/lista/inativos','AdminHomeController@listarInativos')->name('admin-lista-inativos');

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
        Route::get('/downloads/cadastro','DownloadsController@create')->name('downloads-cadastro');
        Route::post('/downloads/cadastro','DownloadsController@store')->name('downloads-salva');
        Route::get('/downloads/{id}','DownloadsController@show')->name('downloads-mostra');
        Route::post('/downloads/editar/{id}','DownloadsController@update')->name('downloads-update');
        Route::get('/downloads/deleta/{id}','DownloadsController@destroy')->name('downloads-deleta');





});



