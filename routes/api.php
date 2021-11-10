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
Route::post("/students", [StudentController::class, 'store']);
route::get("/students/{id}",[StudentController::class,"show"]);
#route menggunakan methode get karna ingin mengakses data kemudian
#end point nya itu /studentd/, kemudian di endpointnya menangkap id yg akan dikirm
#setelah itu dipangggil controllernya ,kesmudian simpan didalam methode show

#method put, routr/student 
route::put("/students/{id}",[StudentController::class, "update"]); #mau mengupdate itu put
#membuat methode delete
route::delete("/students/{id}",[StudentController::class, 'destroy']);