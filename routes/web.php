<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VehicleDetailController;
use App\Http\Controllers\Admin\MakeController;
use App\Http\Controllers\Admin\ModController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\DetailController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if(Auth::user()->id == 1){
        return view('dashboard');
    }else{
        return view('welcome');
    }
})->middleware(['auth',])->name('dashboard');

Route::get('/', [DetailController::class, 'getData'])->name('getData');




Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::get('/status/{id}',[UserController::class, 'status'])->name('status');

    Route::resource('/users', UserController::class);
    Route::resource('/vehicles', VehicleController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/vehicleDetails', VehicleDetailController::class);
    Route::resource('/makes', MakeController::class);
    Route::resource('/models', ModController::class);
    
});

require __DIR__.'/auth.php';