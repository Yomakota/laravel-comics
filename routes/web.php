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
    $comics_list = config('comics');
    $data = [
        'comics' => $comics_list
    ];
    return view('home', $data);
})->name('home');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/single-product/{id}', function ($id) {
    $comics_list = config('comics');
    $current_product = [];
    foreach ($comics_list as $item) {
        if ($item['id'] == $id) {
            $current_product = $item;
        }
        $data = [
            'current_product' => $current_product,
        ];
    }
    return view('single-product', $data);
})->name('single-product');