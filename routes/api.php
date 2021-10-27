<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// method GET

Route::get("/animals", [AnimalController::class, 'index']);

 //method post

Route::post("/animals", [AnimalController::class, 'store']);

 //method put

//ruote::put ("/animals", function(){
    // echo "mengedit hewan";
 //});

 //menambahkan id
Route::put("/animals/{id}", [AnimalController::class, 'update']);

 //method delete

route::delete("/animals", [AnimalController::class, 'delete']);

//routing untuk students
Route::get("/students", [StudentController::class, 'index']);