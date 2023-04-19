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



Auth::routes([
    'verify'=> true
]);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');



Route::get('/home/friends',[App\Http\Controllers\FriendsController::class,'friends'])->name('friends')->middleware('verified');
Route::post('/delete-friend',[App\Http\Controllers\FriendsController::class,'deleteFriend'])->name('delete.friend')->middleware('verified');
Route::get('/pagination/paginate-data',[App\Http\Controllers\FriendsController::class,'pagination'])->middleware('verified');
Route::get('/search-friend',[App\Http\Controllers\FriendsController::class,'searchFriend'])->name('search.friend')->middleware('verified');