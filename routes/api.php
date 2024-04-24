<?php
use App\Models\Company;
use App\Models\Customer;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class, 'showJsonFormat']);
Route::get('/companies', [UserController::class, 'showCompanies']);
Route::get('/customers', [UserController::class, 'showCustomers']);
Route::get('/loans', [UserController::class, 'showLoans']);
