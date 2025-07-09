<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  
});
Route::prefix("posts")->group(function (){
Route::get('/create',[PostController::class,'create'])->name("posts.create");
Route::post('/store',[PostController::class,'store'])->name("posts.store");
Route::get('/',[PostController::class,'index'])->name("posts.index");
});
