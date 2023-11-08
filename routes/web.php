<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventTypeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\ServiceCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/login', [UserController::class, 'loginForm'])->name('admin.login');
Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');

Route::group(['middleware'=>'auth'], function () {

    Route::get('/', [HomeController::class, 'home'])->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
   
    Route::get('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
    
    Route::get('/role/list', [RoleController::class, 'role'])->name('role.list');
   
    Route::get('/eventtype/list', [EventTypeController::class, 'list'])->name('eventtype.list');
    Route::get('/eventtype/create', [EventTypeController::class, 'create'])->name('eventtype.create');
    Route::post('/eventtype/store', [EventTypeController::class, 'store'])->name('eventtype.store');
   
    Route::get('/customer/list', [CustomerController::class, 'list'])->name('customer.list');
    Route::get('/customer/form', [CustomerController::class, 'createform'])->name('customer.form');
    Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');

    
    Route::get('/servicecategory/list', [ServiceCategoryController::class, 'list'])->name('servicecatategory.list');
    Route::get('/servicecategory/form', [ServiceCategoryController::class, 'form'])->name('servicecategory.form');
    Route::post('/servicecategory/store', [ServiceCategoryController::class, 'store'])->name('servicecategory.store');
    
    Route::get('/package/list', [PackageController::class, 'list'])->name('package.list');
    
    Route::get('/booking/list', [BookingController::class, 'list'])->name('booking.list');
    Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

    Route::get('/payment/list', [PaymentController::class, 'list'])->name('payment.list');
    Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create');

    Route::get('/aboutus', [AboutUsController::class, 'list']);
    Route::get('/rating/list',[RatingController::class,'list'])->name('rating.list');
    Route::get('/users/list',[UsersController::class,'list'])->name('users.list');

});
