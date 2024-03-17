<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::match(['put','patch','post'], '/goku', function () {
    return 'Ultra Instinct Goku!';
});


// Route::get('/user',[UserController::class, 'index']);
Route::get('/getMethod', function (Request $request) {
    return "This is created using GET method";
});
 
Route::post('/postMethod', function (Request $request) {
    return "This is created using POST method";
});

Route::put('/putMethod', function (Request $request) {
    return "This is created using PUT method";
});

Route::patch('/patchMethod', function (Request $request) {
    return "This is created using PATCH method";
});

Route::delete('/deleteMethod', function (Request $request) {
    return "This is created using DELETE method";
});

Route::options('/optionsMethod', function (Request $request) {
    return "This is created using OPTIONS method";
});