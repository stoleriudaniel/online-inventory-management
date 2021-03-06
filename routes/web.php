<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/brands', function () {
    return view('brands');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/add', function () {
    return view('add-product');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/settings', function () {
    return view('settings');
});