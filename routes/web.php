<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KosController;
use App\Http\Controllers\AuthController;
use App\Models\Kos;

Route::get('/', function () {
    $kos = Kos::all();
    return view('guest.dashboard', compact('kos'));
});

Route::get('/login', function () {
    return view('guest.form-login');
})->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot.password');
Route::get('/register', function () {
    return view('guest.form-register');
})->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::delete('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::controller(KosController::class)->prefix('kos')->name('kos.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}/show', 'show')->name('show');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}/update', 'update')->name('update');
        Route::get('/{id}/destroy', 'destroy')->name('destroy');
    });

});
// Route::get('/1', function () {
//     return view('admin.dashboard2');
// });

// Route::get('/login', function () {
//     return view('guest.form-login');
// })->name('login');

// Route::get('/4', function () {
//     return view('guest.form-newpassword');
// });

// Route::get('/register', function () {
//     return view('guest.form-register');
// });

// Route::get('/6', function () {
//     return view('guest.form-verification');
// });

// Route::get('/guest', function () {
//     $kos = Kos::all();
//     return view('guest.dashboard', compact('kos'));
// });


// Route::get('/8', function () {
//     return view('guest.kos-page-notlogin');
// });

// Route::get('/9', function () {
//     return view('ibukos.dashboard');
// });

// Route::get('/10', function () {
//     return view('ibukos.form-edit-kos');
// });

// Route::get('/11', function () {
//     return view('ibukos.form-new-kos');
// });

// Route::get('/12', function () {
//     return view('user.dashboard');
// });

// Route::get('/13', function () {
//     return view('user.form-filter');
// });

// Route::get('/14', function () {
//     return view('user.form-payment');
// });

// Route::get('/15', function () {
//     return view('user.hasil-search');
// });

// Route::get('/16', function () {
//     return view('user.kos-page');
// });
