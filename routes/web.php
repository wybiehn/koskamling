<?php //we wok de tok not onle tok de tok

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('admin.dashboard2');
});

Route::get('/2', function () {
    return view('anonim.form-forgotpassword');
});

Route::get('/3', function () {
    return view('anonim.form-login');
});

Route::get('/4', function () {
    return view('anonim.form-newpassword');
});

Route::get('/5', function () {
    return view('anonim.form-register');
});

Route::get('/6', function () {
    return view('anonim.form-verification');
});

Route::get('/7', function () {
    return view('anonim.homepage');
});

Route::get('/8', function () {
    return view('anonim.kos-page-notlogin');
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