<?php

use App\Http\Controllers\Site\CompanyController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Middleware\CheckLogin;
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

Route::group(['middleware' => CheckLogin::class], function(){
    
    /**
     * SITE
     */

    Route::get('/', [SiteController::class, 'home'])->name('site.home');

    /**
     * COMPANIES
     */

    Route::get('/empresas', [CompanyController::class, 'companies'])->name('site.companies');

});