<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\RatingController;
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\BookingController as BackendBookingController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomerController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController; 
use App\Http\Controllers\Frontend\AboutUsController as FrontendAboutUs;
use App\Http\Controllers\Frontend\PackageController as FrontendPackageController;

use App\Http\Controllers\Frontend\ContactusController as FrontendContactusController;
use App\Http\Controllers\Frontend\BookingController as FrontendBookingController;

use App\Http\Controllers\Frontend\MasterController;

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

Route::get('/',[FrontendHomeController::class,'home'])->name('frontendhome');
Route::get('/master',[MasterController::class,'master'])->name('master');

Route::get('search-service',[FrontendPackageController::class,'search'])->name('search');

Route::get('/registration',[FrontendCustomerController::class,'registration'])->name('customer.registration');
Route::post('/registration', [FrontendCustomerController::class,'registrationstore'])->name('customer.store');

Route::get('/login',[FrontendCustomerController::class, 'login'])->name('login');
Route::post('/login',[FrontendCustomerController::class,'dologin'])->name('customer.do.login');


Route::get('/package',[FrontendPackageController::class,'package'])->name('user.package');
Route::get('single-view/{id}',[FrontendPackageController::class,'singleview'])->name('single.view');




Route::group(['middleware'=>'auth'],function(){
    Route::get('/profile',[FrontendCustomerController::class,'profile'])->name('profile.view');
    Route::get('/profile/edit/{id}', [FrontendCustomerController::class, 'edit'])->name('profile.edit');
    Route::put('profile/update/{id}',[FrontendCustomerController::class,'update'])->name('profile.update');
    
    
    
    Route::get('/contactus',[FrontendContactusController::class,'contact'])->name('user.contact');
    
    // Route::get('/get-quote',[FrontendBookingController::class,'q+uote'])->name('get.quote');
    Route::post('booking-submit',[FrontendBookingController::class,'book'])->name('booking.submit');
    Route::get('booking_confirm/{id}',[FrontendBookingController::class,'book_confirm'])->name('Booking_Confirm');
    Route::get('booking_cancel/{id}',[FrontendBookingController::class,'book_cancel'])->name('Booking_Cancel');
    
    Route::get('/logout',[FrontendCustomerController::class, 'logout'])->name('customer.logout');
});
 






Route::group(['prefix'=>'admin'],function(){

Route::get('/login', [UserController::class, 'loginForm'])->name('admin.login');
Route::post('/login-form-post', [UserController::class, 'loginPost'])->name('admin.login.post');

Route::group(['middleware'=>'auth'], function () {
    Route::group(['middleware'=>'checkadmin'], function (){

    Route::get('/', [HomeController::class, 'home'])->name('home');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
   
    Route::get('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
    
    Route::get('/role/list', [RoleController::class, 'role'])->name('role.list');
   
    Route::get('/event/list', [EventController::class, 'list'])->name('event.list');
    Route::get('/event/form', [EventController::class, 'createform'])->name('event.form');
    Route::post('/event/store', [EventController::class, 'store'])->name('event.store');
    Route::get('/event/view/{id}', [EventController::class, 'view'])->name('event.view');
    Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::put('/event/update/{id}', [EventController::class, 'update'])->name('event.update');
    Route::get('/event/delete/{id}', [EventController::class, 'delete'])->name('event.delete');
   
    Route::get('/customer/list', [CustomerController::class, 'list'])->name('customer.list');
    Route::get('/customer/form', [CustomerController::class, 'createform'])->name('customer.form');
   Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');

    Route::get('/user/list',[UserController::class,'list'])->name('user.list');
    Route::get('/user/form',[UserController::class,'createform'])->name('user.form');
    Route::post('/user/store',[UserController::class,'store'])->name('user.store');
    
    Route::get('/service/list', [ServiceController::class, 'list'])->name('service.list');
    Route::get('/service/form', [ServiceController::class, 'form'])->name('service.form');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/service/view/{id}',[ServiceController::class,'view'])->name('service.view');
    Route::get('/service/delete/{id}',[ServiceController::class,'delete'])->name('service.delete');
    Route::get('/service/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
    Route::put('/service/update/{id}',[ServiceController::class,'update'])->name('service.update');
    
    Route::get('/package/list', [PackageController::class, 'list'])->name('package.list');
    Route::get('/package/form',[PackageController::class,'createform'])->name('package.form');
    Route::post('/package/store',[PackageController::class,'store'])->name('package.store');
    
    
    Route::get('/booking/list', [BackendBookingController::class, 'list'])->name('booking.list');
    Route::get('/update-price/{id}',[BackendBookingController::class,'update'])->name('update');
    Route::put('/updated/{id}',[BackendBookingController::class,'priceupdated'])->name('price.update');
   
    Route::get('/payment/list', [PaymentController::class, 'list'])->name('payment.list');
    Route::get('/payment/form', [PaymentController::class, 'createform'])->name('payment.form');

    Route::get('/aboutus', [AboutUsController::class, 'list']);
    Route::get('/rating/list',[RatingController::class,'list'])->name('rating.list');
});

});
});