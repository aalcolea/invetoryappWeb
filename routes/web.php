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

});
//Products
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');