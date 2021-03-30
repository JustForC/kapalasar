<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use App\Http\Controllers\Merchant\MerchantController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::group(['prefix' => 'admin'],function(){
    Route::get('/home',[AdminController::class,'home']);
    Route::get('/voucher',[AdminController::class,'voucher']);
    Route::get('/product',[AdminController::class,'product']);
    Route::post('/addvoucher',[AdminController::class,'makeVoucher']);
});

Route::group(['prefix' => 'superadmin'],function(){
    Route::get('/home',[SuperAdminController::class,'home']);
    Route::get('/admin',[SuperAdminController::class,'admin']);
    Route::post('/addadmin',[SuperAdminController::class,'registerAdmin']);
    Route::get('/merchant',[SuperAdminController::class,'merchant']);
    Route::post('/addmerchant',[SuperAdminController::class,'registerMerchant']);
    Route::get('/user',[SuperAdminController::class,'user']);
    Route::get('/product',[SuperAdminController::class,'product']);
    Route::post('/addproduct',[SuperAdminController::class,'addProduct']);
    Route::get('/voucher',[SuperAdminController::class,'voucher']);
    Route::post('/addvoucher',[SuperAdminController::class,'makeVoucher']);
});

Route::group(['prefix' => 'merchant'],function(){
    Route::get('home',[MerchantController::class,'home']);
});