<?php

use Illuminate\Support\Facades\Route;

# Index Page
Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

# App Page
Route::get('/app', ['as' => 'app', 'uses' => 'IndexController@app']);

# Transaction Page
Route::get('/transaction', ['as' => 'transaction', 'uses' => 'IndexController@transaction']);
