<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/purchase-order', function () {
    return view('welcome');
})->name('purchase-order');

Route::get('/admin/pr/{id}', function ($id) {
    return view('welcome', ['id' => $id]);
})->name('admin.pr');

Route::get('/purchase-order-admin', function () {
    return view('welcome');
})->name('purchase-order-admin');

Route::get('/create-pr', function () {
    return view('welcome');
})->name('create-pr');


Route::get('/print-request/{id}', function ($id) {
    return view('welcome', ['id' => $id]);
})->name('print-request');

