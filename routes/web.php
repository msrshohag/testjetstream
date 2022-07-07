<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Employee\EmployeeDashboard;
use App\Http\Livewire\User\UserDashboard;

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
//     return view('welcome');
// });

Route::get('/', Home::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');
});

Route::middleware(['auth:sanctum', 'verified','authemployee'])->group(function () {
    Route::get('/employee/dashboard',EmployeeDashboard::class)->name('employee.dashboard');
});

Route::middleware(['auth:sanctum', 'verified','authuser'])->group(function () {
    Route::get('/user/dashboard',UserDashboard::class)->name('user.dashboard');
});