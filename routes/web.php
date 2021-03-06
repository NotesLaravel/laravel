<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     $instants = [new Instant('titulo1'), new Instant('titulo2')]; 
//     return view('landing',['instants'=>$instants]);
// });


Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/instants/create', [InstantController::class, 'create'])->name('instants.create');

Route::post('/instants/create', [InstantController::class, 'store'])->name('instants.store');

Route::delete('/instants/{id}', [InstantController::class, 'destroy'])->name('instants.destroy');