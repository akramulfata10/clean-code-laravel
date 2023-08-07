<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('posts')->as('posts:')->group(function (){
    Route::get('/', App\Http\Controllers\Api\V1\Posts\IndexController::class)->name('index');

    Route::get('{posts:uuid}', App\Http\Controllers\Api\V1\Posts\ShowController::class)->name('show');

});