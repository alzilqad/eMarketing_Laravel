<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manager_module\appointmentsController;
use App\Http\Controllers\manager_module\callsController;
use App\Http\Controllers\manager_module\clientsController;
use App\Http\Controllers\manager_module\companyController;
use App\Http\Controllers\manager_module\managersController;
use App\Http\Controllers\manager_module\notesController;
use App\Http\Controllers\manager_module\proposalsController;
use App\Http\Controllers\manager_module\servicesController;
use App\Http\Controllers\manager_module\accessController;
use App\Http\Controllers\manager_module\chatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manager/login', [accessController::class, 'showLoginPage']);
Route::post('/manager/login', [accessController::class, 'loginVerification']);
Route::get('/manager/signout', [accessController::class, 'showSignOutPage']);
Route::get('/manager/signup', [accessController::class, 'showSignUpPage']);
Route::post('/manager/signup', [accessController::class, 'storeManager']);
Route::get('/manager/forgot-password', [accessController::class, 'showForgotPasswordPage']);

Route::group(['middleware'=>['sess']], function () {
    Route::get('/manager-dashboard', [managersController::class, 'index']);
    Route::get('/manager/clients', [clientsController::class, 'index']);
    Route::get('/manager/company', [companyController::class, 'index']);
    Route::get('/manager/services', [servicesController::class, 'index']);
    Route::get('/manager/chat', [chatController::class, 'index']);
    Route::get('/manager/profile', [managersController::class, 'showProfile']);
    Route::get('/manager/profile/{id}/edit', [managersController::class, 'showProfileEdit']);
    Route::get('/manager/show-client/{id}', [clientsController::class, 'showClient']);
    Route::get('/manager/show-client/{id}/edit', [clientsController::class, 'showClientProfileEdit']);
    Route::get('/manager/show-client/{id}/calls', [clientsController::class, 'showClientCall']);
    Route::get('/manager/show-client/{id}/appointments', [clientsController::class, 'showClientAppointment']);
    Route::get('/manager/show-client/{id}/notes', [clientsController::class, 'showClientNote']);
    Route::get('/manager/show-client/{id}/proposals', [clientsController::class, 'showClientProposal']);
});