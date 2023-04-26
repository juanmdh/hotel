<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

//NAVEGACIONES ENTRE PAGINAS
Route::get('/index',[UsuarioController::class,'regresar_index'])->name('index');
Route::get('/uruarios',[UsuarioController::class,'usuarios'])->name('uruarios');

// REGISTRO
Route::post('registrar-usuario',[UsuarioController::class,'registrar'])->name('registrar-usuario');
Route::post('buscar-usuario_documento_identidad',[UsuarioController::class,'buscar_documento_identidad'])->name('buscar-usuario_documento_identidad');
Route::post('buscar-usuario_correo',[UsuarioController::class,'buscar_correo'])->name('buscar-usuario_correo');
Route::post('buscar-buscar_logeo',[UsuarioController::class,'buscar_logeo'])->name('buscar-buscar_logeo');
