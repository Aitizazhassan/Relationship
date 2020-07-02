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

use App\User;

Route::get('/', function () {
  $user = App\User::first();

  $roles = App\Role::all();

    $user->roles()->syncwithoutdetaching([
        2=> [
            'name'=>'Aitizaz'
        ]
    ]);
//    $user->roles()->syncwithoutdetaching($roles);
//    $users = App\User::all();
//     return $user->roles;
//   return 'every thing is fine';
//    foreach ($user->roles as $role)
//    {
//       echo $role->name;
//    }
    dd($user->roles->first()->pivot);
});
