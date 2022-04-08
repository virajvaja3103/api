<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/product', ProductController::class);

Route::group(['prefix'=>'product'],function(){

    Route::apiResource('/{product}/reviews',ReviewController::class);

});
