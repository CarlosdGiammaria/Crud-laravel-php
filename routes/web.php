<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('cliente',ClienteController::class);
Route::delete('/cliente/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
