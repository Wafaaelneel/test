<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profiles', [HomeController::class, 'people'])->name('profiles');
Route::get('/people-profile/{name}', [HomeController::class, 'show'])->name('people.profile');
Route::get('/request', [AddController::class, 'index'])->name('requests');   //post
Route::get('/requests', [AddController::class, 'showrequests'])->name('requests.show');
Route::get('/friends', [AddController::class, 'showfriends'])->name('friends.show');
