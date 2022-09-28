<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddParrotController;


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

Route::get('login',[UserController::class, 'loginPage'])->name('login.user');

Route::post('post-login',[UserController::class,'postLogin'])->name('post.login');
    
Route::get('users-registration',[UserController::class, 'usersRegistration'])->name('users.registration');
    
Route::post('create_account',[UserController::class,'createaccount_store'])->name('store.createaccount');

Route::get('signout',[UserController::class,'userSignout'])->name('sign.out');


Route::group(['middleware' => 'web'],function(){

    Route::get('show-users',[UserController::class,'showUsers'])->name('show.users');
    
    Route::get('delete-users/{id}',[UserController::class,'delete'])->name('destroy.users');
    
    Route::get('edit-users/{id}',[UserController::class,'edituser'])->name('edit.users');
    
    Route::post('update-users/{id}',[UserController::class,'updateuser'])->name('update.users');
    
    Route::get('user-dashboard',[UserController::class,'userDashboard'])->name('user.dashboard');
    
    Route::get('add-parrot',[AddParrotController::class,'Parrot'])->name('add.parrot');
    Route::post('storeadd-parrot',[AddParrotController::class,'storeParrot'])->name('postadd.parrot');
    
    Route::get('details-parrot',[AddParrotController::class,'detailsParrot'])->name('details.parrot');
    
});