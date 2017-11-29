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

Route::get('/', function () {
    $links = [
        'http://platzi.com/laravel' =>  'Curso de Laravel',
        'http://laravel.com'        =>  'Página de Laravel'
    ];
    return view('welcome', [
        'links'     =>  $links,
        'teacher'   =>  'Guido Contreras Woda'
    ]);
});

Route::get('/acerca', function () {
    return view('about');
});
