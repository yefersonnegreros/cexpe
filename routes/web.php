<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramasController;

Route::view('/','landing.inicio')->name('inicio');

Route::get('programas',[ProgramasController::class,'programas'])->name('programas');

Route::view('talleres','landing.talleres')->name('talleres');
Route::view('asesoramiento','landing.asesoramiento')->name('asesoramiento');
Route::view('contacto','landing.contacto')->name('contacto');