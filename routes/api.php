<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('company', \App\Http\Controllers\api\CompanyController::class);
Route::apiResource('department', \App\Http\Controllers\api\DepartmentController::class);
Route::apiResource('employee', \App\Http\Controllers\api\EmployeeController::class);
Route::apiResource('software', \App\Http\Controllers\api\SoftwareController::class);
Route::apiResource('hardware', \App\Http\Controllers\api\HardwareController::class);
