<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
use App\Livewire\CreatePr;
use App\Livewire\AdminPr;
use App\Livewire\PrintRequest;

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
=======
use App\Livewire\AdminPo;
use App\Livewire\PurchaseOrderView;
use App\Livewire\PurchaseOrderAdmin;
>>>>>>> Stashed changes

Route::get('/', function () {
    return view('welcome');
});

Route::get('/purchase-order', function () {
    return view('purchase-order');
})->name('purchase-order');

Route::get('/admin/pr/{id}', function ($id) {
    return view('admin-pr', ['id' => $id]);
})->name('admin.pr');

Route::get('/purchase-order-admin', function () {
    return view('purchase-order-admin');
})->name('purchase-order-admin');

Route::get('/create-pr', function () {
    return view('create-pr');
})->name('create-pr');


Route::get('/print-request/{id}', function ($id) {
    return view('print-request', ['id' => $id]);
})->name('print-request');

<<<<<<< Updated upstream
=======
Route::get('/PO-View', function () {
    return view('purchase-order-view');
})->name('purchase-order-view');

Route::get('/admin/po/{id}', function ($id) {
    return view('admin-po', ['id' => $id]);
})->name('admin-po');


Route::get('/PO-View', PurchaseOrderView::class)->name('purchase-order-view');

Route::get('/admin/po/{id}', AdminPo::class)->name('admin-po');
Route::get('/purchase-order-admin', PurchaseOrderAdmin::class)->name('purchase-order-admin');
>>>>>>> Stashed changes
