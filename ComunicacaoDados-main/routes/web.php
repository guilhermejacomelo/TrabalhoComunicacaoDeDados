<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'voyager'], function () {
    Voyager::routes();
})->name('voyager.');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return redirect()->route('voyager.dashboard');
    })->name('admin.dashboard')->middleware('admin.user');
});
