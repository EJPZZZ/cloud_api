<?php

use App\Models\Company;
use App\Models\Customer;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    return response()->json([
        'este es el formato json'
    ]);
});
Route::get('/companies', function () {
    return Company::with('customers')
    ->with('loans')->select('id', 'name')->get();
});



Route::get('/customers', function(){
    return Customer::with('companies')->get();
});

Route::get('/loans', function(){
    return Loan::with('company')->with('colombian')->with('customer')->get();
});