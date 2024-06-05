<?php

use App\Livewire\AdminPo;
use App\Livewire\PurchaseOrderView;
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

Route::get('/admin/po/{id}', function ($id) {
    return view('welcome', ['id' => $id]);
})->name('admin-po');



Route::get('/purchase-order/{id}/detail', [PurchaseOrderView::class, 'showDetail'])->name('purchase-order.detail');
Route::post('/purchase-order/{id}/update', [PurchaseOrderView::class, 'update'])->name('purchase-order.update');
Route::get('/admin-po/{id}', [AdminPo::class, 'show'])->name('admin-po.show');
