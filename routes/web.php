<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\GroupController;




Route::get('/', [HomeController::class, 'index']);

Route::get('/masukan', [ContactController::class, 'index']);
Route::post('/masukan', [ContactController::class, 'save'])->name('contact.store');

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function() {
        Route::get('dashboard', [DashboardController::class, 'index']);

        route::resource('users', UserController::class);
        route::resource('roles', RoleController::class);
        Route::resource('groups', GroupController::class);

    }
);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/', function () {
    return view('Magangzen.home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


