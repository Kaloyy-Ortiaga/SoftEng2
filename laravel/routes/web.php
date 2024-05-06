<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ItemList;
use App\Livewire\CreatePr;

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

Route::get('/supplier-list', function () {
    return view('supplier-list');
})->name('supplierList');

Route::get('/item-list', function () {
    return view('livewire.item-list'); 
})->name('ItemList');





Route::get('/create-pr', CreatePr::class)->name('create-pr');

Route::get('/purchase-order', function () {
    return view('purchase-Order');
})->name('purchaseOrder');

Route::get('/invoice-list', function () {
    return view('invoice-ist');
})->name('invoiceList');
