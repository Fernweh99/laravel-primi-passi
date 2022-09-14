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
    $data = ['name' => 'Daniele', 'surname' => 'Di Mento'];
    return view('home', $data);
});

Route::get('/info', function () {
    $data = ['job' => 'Web Developer', 'interests' => ['Games','Cinema','Comics']];
    return view('info', $data);
});
