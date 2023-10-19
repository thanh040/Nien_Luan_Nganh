<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/thesis-by-industry', function () {
    return view('thesis_by_industry');
});
Route::get('/thesis-according-to-instructors', function () {
    return view('thesis_according_to_instructors');
});
Route::post('/post-login' , [UserController::class, 'check_login']);
