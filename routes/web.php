<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/registrar', function () {
    return view('registrar');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login/pokemon/{id}', [LoginController::class, 'verificacion'])->name('login.verificacion');
Route::post('/login/check', [LoginController::class, 'check'])->name('usuario.verificar');
Route::post('/user/create', [UserController::class, 'store'])->name('usuario.crear');
Route::get('/login/exit', [LoginController::class, 'exit'])->name('salir');
Route::get('/user/form', [UserController::class, 'create'])->name('form.create');

Route::middleware(['auth'])->group(function (){
    Route::get('/pokemon', function () {
        return view('pokemon');
    });
});

