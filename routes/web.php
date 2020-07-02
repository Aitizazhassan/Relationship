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
    $user = factory(App\User::class)->create();
    $user->posts()->create([
       'post'=>'first post as one to many relationship',

    ]);
    $post = $user->posts->first();
    $post->post = 'have new post';
    $post->save();
//    $user->posts->first()->post = 'new post';
//    $user->push();
    return $user->posts;
});
