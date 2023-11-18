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

Route::get('/', [UserController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/majors/computer-engineering', function () {
    return view('majors.computer_engineering');
});
Route::get('/majors/computer-network', function () {
    return view('majors.computer_network');
});
Route::get('/majors/computer-science', function () {
    return view('majors.computer_science');
});
Route::get('/majors/information-system', function () {
    return view('majors.information_system');
});
Route::get('/majors/information-technology', function () {
    return view('majors.information_technology');
});
Route::get('/majors/multimedia-communications', function () {
    return view('majors.multimedia_communications');
});
Route::get('/majors/network-security', function () {
    return view('majors.network_security');
});
Route::get('/majors/software-technology', function () {
    return view('majors.software_technology');
});
Route::get('/thesis-by-industry', function () {
    return view('majors.thesis_by_industry');
});
Route::get('/thesis-according-to-instructors', function () {
    return view('thesis_according_to_instructors');
});
Route::post('/post-login' , [UserController::class, 'check_login']);
Route::post('/post-register' , [UserController::class, 'check_register']);


