<?php


use Illuminate\Support\Facades\Route;
use app\http\Controller\ClienteController;




Route::get('/', function () {
    return view('welcome');
});

Route::resource('/cliente',ClienteController::class);


