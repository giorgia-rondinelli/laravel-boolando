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
    $menu=config('menu');
    $icons=config('icons');
    $cards=config('cards');
    return view('home', compact('menu','icons','cards'));
})->name('home');

Route::get('/about', function () {
    $menu=config('menu');
    $icons=config('icons');
    return view('about',compact('menu','icons'));
})->name('chi siamo');

Route::get('/donna', function () {
    $menu=config('menu');
    $icons=config('icons');
    return view('donna',compact('menu','icons',));
})->name('donna');

Route::get('/uomo', function () {
    $menu=config('menu');
    $icons=config('icons');
    return view('uomo',compact('menu','icons',));
})->name('uomo');

Route::get('/bambini', function () {
    $menu=config('menu');
    $icons=config('icons');
    return view('bambini',compact('menu','icons',));
})->name('bambini');
