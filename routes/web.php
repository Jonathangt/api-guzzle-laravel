<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\PostController@index');
Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show');







