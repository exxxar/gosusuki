<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('certificate-form');
});


Route::post('vaccine/registration', [\App\Http\Controllers\CertificateController::class,'registration'])->name("registration");
Route::get('vaccine/certificate', [\App\Http\Controllers\CertificateController::class,'download']);
Route::get('vaccine/example/{uuid}', [\App\Http\Controllers\CertificateController::class,'example']);
Route::get('vaccine/certificate-form', [\App\Http\Controllers\CertificateController::class,'certificateForm']);
Route::post('vaccine/certificate-form', [\App\Http\Controllers\CertificateController::class,'registration']);
Route::post('vaccine/certificate-search', [\App\Http\Controllers\CertificateController::class,'search']);

Route::get('covid-cert/status/{uuid}', [\App\Http\Controllers\CertificateController::class,'status']);

Route::get('file-import-export', [UserController::class, 'fileImportExport']);
Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [UserController::class, 'fileExport'])->name('file-export');

