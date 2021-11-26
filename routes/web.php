<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartamentoController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('users/win', [UserController::class, 'win'])->name('win');
Route::get('users/downloadexcel', [UserController::class, 'downloadexcel'])->name('downloadexcel');
Route::get('users', [UserController::class, 'index'])->name('index');
Route::get('users/create', [UserController::class, 'create'])->name('create');
Route::post('users/create', [UserController::class, 'store'])->name('store');
Route::get('users/{user}', [UserController::class, 'show'])->name('show');


Route::get('departamentos/{departamento_id}', [DepartamentoController::class, 'obtener_ciudades'])->name('obtener_ciudades');
