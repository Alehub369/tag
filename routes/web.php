<?php

use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'tags' => Tag::get()
    ]);
});

Route::post('tags', [App\Http\Controllers\TagController::class, 'store']);
Route::delete('tags/{tag}', [App\Http\Controllers\TagController::class, 'destroy']);