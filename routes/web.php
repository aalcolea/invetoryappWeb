<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Portal\AuthControllerPortal;
use App\Http\Controllers\Portal\DashboardController;
use App\Http\Controllers\Portal\ProductsController;
use App\Models\User;
use App\Notifications\PushNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
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

Route::get('userAll', [AuthController::class, 'userAll']);
Route::get('/database-schema', [AuthController::class, 'getSchema']);
//publicas
Route::get('/login', [AuthControllerPortal::class, 'showLogin'])->name('login');
Route::post('/login', [AuthControllerPortal::class, 'login'])->name('login.post');
Route::post('/logout', [AuthControllerPortal::class, 'logout'])->name('logout');
//ruta sdentro del sistema
Route::middleware(['auth.check'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //productos
        Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
        Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
        Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
        Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
        Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
        Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');

});
Route::get('/testFly',  [ProductsController::class, 'testFly'])->name('products.testFly');
//Products
