<?php

use App\Http\Controllers\MotorcyclesController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\EngineTypesController;
use App\Models\Motorcycle;
use Illuminate\Support\Facades\Route;



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


Route::get('/', function () {


    return redirect('motorcycles');
});
Route::get('motorcycles/expensive', [MotorcyclesController::class, 'expensive'])->name('motorcycles.expensive');
Route::get('motorcycles/yamaha', [MotorcyclesController::class, 'yamaha'])->name('motorcycles.yamaha');
route::resource("motorcycles", MotorcyclesController::class)  ;
route::resource("brands", BrandsController::class)  ;
route::resource("enginetypes", EngineTypesController::class)  ;
