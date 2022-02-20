<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ActivityLogController;

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

Route::middleware('auth:api')->get('/test', function (Request $request) {
    return new JsonResponse(['message' => 'Hello world']);
});

Route::post('/register',[UserController::class,'store']);
Route::post('/login',[UserController::class,'login']);

Route::get('/employee',[EmployeeController::class,'index']);
Route::post('/employee/create',[EmployeeController::class,'store']);
Route::post('/employee/update',[EmployeeController::class,'update']);
Route::get('/employee/edit/{id}',[EmployeeController::class,'edit']);
Route::post('/employee/delete/{id}',[EmployeeController::class,'destroy']);

Route::get('/employees/{id}',[EmployeeController::class,'show']);
Route::post('/employees/import',[EmployeeController::class,'import']);
Route::post('/employees/export',[EmployeeController::class,'export']);
Route::post('/employees/search',[EmployeeController::class,'search']);
Route::get('/employees/{id}/manager',[EmployeeController::class,'getEmployeeManager']);

Route::get('/employees/{id}/manager-salary',[EmployeeController::class,'getEmployeeManagerSalary']);


Route::get('/{date}/logs',[ActivityLogController::class,'index']);
