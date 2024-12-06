<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Portal\DashboardController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('userAll', [AuthController::class, 'userAll']);
Route::get('/database-schema', [AuthController::class, 'getSchema']);


