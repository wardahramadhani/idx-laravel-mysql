<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    foreach(User::all() as $user) {
        dump($user->name);
    }
});