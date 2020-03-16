<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('auth/login',
  [
    'uses' => 'AuthController@authenticate'
  ]
);

$router->post('user', 'UserController@store');


$router->group(
    ['middleware' => 'jwt.auth'],
    function() use ($router) {
      // UNTUK MENYIMPAN
      $router->post('content', 'ContentController@store');
      // UNTUK MENAMPILKAN SEMUA DATA
      $router->get('content', 'ContentController@index');
      // UNTUK MENAMPILKAN SALAH SATU DATA
      $router->get('content/{id}', 'ContentController@show');
      // UNTUK MENGUBAH DATA TERTENTU
      $router->put('content/{id}', 'ContentController@update');
      // UNTUK MENGHAPUS DATA TERTENTU
      $router->delete('content/{id}', 'ContentController@destroy');
    }
);
