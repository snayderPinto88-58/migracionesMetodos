<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//index
//Route::get('evento',[EventoController::class,'index']);


//losroutes
Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
Route::get('/eventos/{evento}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
Route::put('/eventos/{evento}', [EventoController::class, 'update'])->name('eventos.update');



Route::get('/eventos/{evento}/destroy', [EventoController::class, 'destroy'])->name('eventos.destroy');
Route::delete('/eventos/{evento}', [EventoController::class, 'delete'])->name('eventos.delete');
//store 

//Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
//Route::post('/eventos/store', [EventoController::class, 'store'])->name('eventos.store');

//show
//Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');

//Route::get('edit',[EventoController::class,'edit']);

//Route::get('/eventos/{evento}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
//Route::put('/eventos/{evento}', [EventoController::class, 'update'])->name('eventos.update');
//Route::delete('/eventos/{evento}', [EventoController::class, 'destroy'])->name('eventos.destroy');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
