<?php

use App\Http\Controllers\Company_branchAuthController;
use App\Http\Controllers\Company_branchController;
use App\Http\Controllers\CompanyAuthController;
use App\Http\Controllers\CompanyController;
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
    return view('welcome');
});

Route::view('parent', 'cms.parent');
// Route::resource('companies', CompanyController::class);


Route::prefix('cms/')->middleware('guest:company')->group(function(){
    Route::get('{guard}/login' , [CompanyAuthController::class , 'showLogin'])->name('view.login');
    Route::post('{guard}/login' , [CompanyAuthController::class , 'login']);

    Route::get('{guard}/login' , [Company_branchAuthController::class , 'showLogin'])->name('view.login');
    Route::post('{guard}/login' , [Company_branchAuthController::class , 'login']);
});

Route::prefix('cms/admin')->group(function(){
    Route::resource('companies', CompanyController::class);
    Route::post('companies_update/{id}',[CompanyController::class,'update']);
    // Route::post('companies_Trach',[CompanyController::class,'Trach']);



    Route::resource('company_branches', Company_branchController::class);
    Route::post('company_branches_update/{id}',[Company_branchController::class,'update']);


});
