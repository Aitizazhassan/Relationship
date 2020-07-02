<?php

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
    $user = factory(\App\User::class)->create();
    $user->phone()->create([
       'phone'=>'234-434-343',
    ]);
    dd($user->phone);
//    return $user;

});
