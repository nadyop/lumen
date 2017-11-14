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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/posts','PostController@daftar');
$app->post('/posts','PostController@tambah');
$app->get('/posts/{id}','PostController@detail');
$app->put('/posts/{id}','PostController@ubah');
$app->delete('/posts/{id}','PostController@delete');
