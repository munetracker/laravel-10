<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\ItemsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);


Route::get('/item', [ItemsController::class, 'index']);

