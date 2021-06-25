<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::group([
    'middleware' =>'api',
], function($router){*/
//Get all employees
Route::get('employees', 'EmployeeController@getEmployee');

//Get Specic employee detail
Route::get('/employee/{id}', 'EmployeeController@getEmployeeById');

//Add Employee
Route::post('/employee', 'EmployeeController@addEmployee');

//Update Employee
Route::put('/employee/update/{id}', 'EmployeeController@updateEmployee');

//Delete Employee
Route::delete('/employee/delete/{id}','EmployeeController@deleteEmployee');
//});

