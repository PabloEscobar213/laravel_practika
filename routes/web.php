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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});
route::name('user.')->group(function(){
    route::view('/private', 'private')->middleware('auth')->name('private');

    route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login'); 

    //route::post('/login', [])

    //route::get('/logout',[])->('logout');

    route::get('/registration', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    route::post('/registration',[\App\Http\Controllers\RegisterController::class, 'save']);
});




