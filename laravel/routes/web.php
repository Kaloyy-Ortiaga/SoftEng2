<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/PO-View', function () {
    return view('welcome');
})->name('purchase-order-view');

// Route::get('/admin/po', function () {
//     return view('welcome');
// })->name('admin-po');

Route::get('/admin/po/{id}', function ($id) {
    return view('welcome', ['id' => $id]);
})->name('admin-po');

Route::get('/admin/detail-po/{po_number}', function ($po_number) {
    return view('welcome', ['po_number' => $po_number]);
})->name('admin.detail-po');

Route::get('/print-purchase-order/{po_number}', function ($po_number) {
    return view('welcome', ['po_number' => $po_number]);
})->name('print-purchase-order');