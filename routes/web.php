<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KosController;
use App\Http\Controllers\AuthController;

Route::redirect('/', '/guest');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::delete('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // Protected routes go here.
    // Route::get('/dashboard', [App\Http\Controllers\::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [KosController::class, 'index'])->name('dashboard');
    Route::get('/kos/create', [KosController::class, 'create'])->name('kos.create');
    Route::post('/kos/store', [KosController::class, 'store'])->name('kos.store');
    Route::get('/kos/{id}', [KosController::class, 'show'])->name('kos.show');
    Route::get('/kos/{id}/edit', [KosController::class, 'edit'])->name('kos.edit');
    Route::put('/kos/{id}', [KosController::class, 'update'])->name('kos.update');
    Route::delete('/kos/{id}', [KosController::class, 'destroy'])->name('kos.destroy');

});
Route::get('/1', function () {
    return view('admin.dashboard2');
});

Route::get('/2', function () {
    return view('guest.form-forgotpassword');
});

Route::get('/login', function () {
    return view('guest.form-login');
})->name('login');

Route::get('/4', function () {
    return view('guest.form-newpassword');
});

Route::get('/register', function () {
    return view('guest.form-register');
});

Route::get('/6', function () {
    return view('guest.form-verification');
});
Route::get('/guest', function () {
    return view('guest.dashboard');
});


Route::get('/8', function () {
    return view('guest.kos-page-notlogin');
});

Route::get('/9', function () {
    return view('ibukos.dashboard');
});

Route::get('/10', function () {
    return view('ibukos.form-edit-kos');
});

Route::get('/11', function () {
    return view('ibukos.form-new-kos');
});

Route::get('/12', function () {
    return view('user.dashboard');
});

Route::get('/13', function () {
    return view('user.form-filter');
});

Route::get('/14', function () {
    return view('user.form-payment');
});

Route::get('/15', function () {
    return view('user.hasil-search');
});

Route::get('/16', function () {
    return view('user.kos-page');
});