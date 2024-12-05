<?php

use App\Models\Alumnos;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class,'index'])->name('index');
Route::get('/series', [PrincipalController::class,'series'])->name('series');
Route::get('/peliculas', [PrincipalController::class,'peliculas'])->name('peliculas');
Route::get('/genero/{genero}', [PrincipalController::class,'genero'])->name('genero');

Route::get('/agregar_serie', [PrincipalController::class,'agregar_serie'])->name('agregar_serie');
Route::post('/guardar_serie', [PrincipalController::class,'guardar_serie'])->name('guardar_serie');
Route::delete('/borrar_serie/{serie}',[PrincipalController::class,'borrar_serie'])->name('borrar_serie');
Route::get('/editar_serie/{serie}',[PrincipalController::class,'editar_serie'])->name('editar_serie');
Route::put('/actualizar_serie/{serie}',[PrincipalController::class,'actualizar_serie'])->name('actualizar_serie');
Route::get('/ver_serie/{serie}',[PrincipalController::class,'ver_serie'])->name('ver_serie');

Route::get('/agregar_pelicula', [PrincipalController::class,'agregar_pelicula'])->name('agregar_pelicula');
Route::post('/guardar_pelicula', [PrincipalController::class,'guardar_pelicula'])->name('guardar_pelicula');
Route::delete('/borrar_pelicula/{pelicula}',[PrincipalController::class,'borrar_pelicula'])->name('borrar_pelicula');
Route::get('/editar_pelicula/{pelicula}',[PrincipalController::class,'editar_pelicula'])->name('editar_pelicula');
Route::put('/actualizar_pelicula/{pelicula}', [PrincipalController::class, 'actualizar_pelicula'])->name('actualizar_pelicula');
Route::get('/ver_pelicula/{pelicula}',[PrincipalController::class,'ver_pelicula'])->name('ver_pelicula');

Route::get('/buscar', [PrincipalController::class,'buscar'])->name('buscar');