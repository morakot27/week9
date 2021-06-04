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
    return view('test1');
});

Route::get('/about', function () {
    return view('/layout/about');
});

Route::get('/property', function () {
    return view('/layout/property');
});
Route::get('/blog', function () {
    return view('/layout/blog');
});

Route::get('/propertysingle', function () {
    return view('/layout/propertysingle');
});
Route::get('/blogsingle', function () {
    return view('/layout/blogsingle');
});
Route::get('/agentgrid', function () {
    return view('/layout/agentgrid');
});
Route::get('/agentsingle', function () {
    return view('/layout/agentsingle');
});
Route::get('/contact', function () {
    return view('/layout/contact');
});


