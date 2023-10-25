<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseLotController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HowToUseController;
use App\Http\Controllers\PricelistController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LotController;


/*
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

Route::get('/', function () {
    return view('web_customer.guest.welcome');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:customer'])->group(function () {
    Route::get('/dashboard', [CustomerController::class, 'CustomerDashboard'])->name('dashboard');
    Route::get('/customer/profile', [CustomerController::class, 'CustomerProfile'])->name('customer.profile');
    Route::post('/customer/profile/store', [CustomerController::class, 'CustomerProfileStore'])->name('customer.profile.store');
    Route::get('/customer/profile/change_password', [CustomerController::class, 'CustomerChangePassword'])->name('customer.change.password');
    Route::post('/customer/profile/update_password', [CustomerController::class, 'CustomerUpdatePassword'])->name('customer.update.password');
    Route::get('/customer/logout', [CustomerController::class, 'CustomerLogout'])->name('customer.logout');
    //Sidebar
    Route::get('/web-customer/verified-customer/chat', [ChatController::class, 'CustomerChat'])->name('customer.chat');
    Route::get('/web-customer/verified-customer/intern', [InternController::class, 'CustomerShowIntern'])->name('customer.showintern');
    Route::get('/web-customer/verified-customer/sold-lots', [LotController::class, 'SoldLots'])->name('sold.lot');
    Route::get('/web-customer/verified-customer/show-pricelist/with-down-payment', [PricelistController::class, 'showCustomerPricelistWithDP'])->name('show.customer.pricelist.withdown');
    Route::get('/web-customer/verified-customer/show-pricelist/no-down-payment', [PricelistController::class, 'showCustomerPricelistNoDP'])->name('show.customer.pricelist.nodown');
    Route::get('/web-customer/verified-customer/how-to-use/watch-online', [HowToUseController::class, 'CustomerWatchOnline'])->name('customer.watchonline');
    Route::get('/web-customer/verified-customer/how-to-use/frequently-ask-question', [HowToUseController::class, 'CustomerFAQ'])->name('customer.faq');
});//End Group Customer Middleware

Route::middleware(['auth','role:manager'])->group(function(){
    Route::get('/admin/manager/dashboard', [ManagerController::class, 'ManagerDashboard'])->name('manager.dashboard');
    Route::get('/admin/manager/profile', [ManagerController::class, 'ManagerProfile'])->name('manager.profile');
    Route::post('/admin/manager/profile/store', [ManagerController::class, 'ManagerProfileStore'])->name('manager.profile.store');
    Route::get('/admin/manager/profile/change_password', [ManagerController::class, 'ManagerChangePassword'])->name('manager.change.password');
    Route::post('/admin/manager/profile/update_password', [ManagerController::class, 'ManagerUpdatePassword'])->name('manager.update.password');
    Route::get('/admin/manager/logout', [ManagerController::class, 'ManagerLogout'])->name('manager.logout');
    //Sidebar
    //Chat
    Route::get('/admin/manager/chat', [ChatController::class, 'ManagerChat'])->name('manager.chat');
    //End Chat
    //ListPrice With Down Payment
    Route::get('/admin/manager/add-pricelist/with-down-payment', [PricelistController::class, 'showPricelistWithDP'])->name('show.pricelist.withdown');
    Route::get('/admin/manager/add-pricelist/with-down-payment/new', [PricelistController::class, 'addPricelistWithDP'])->name('add.pricelist.withdown');
    Route::post('/admin/manager/add-pricelist/with-down-payment/new/store', [PricelistController::class, 'storePricelistWithDP'])->name('store.pricelist.withdown');
    //End ListPrice With Down Payment

    Route::get('/admin/manager/add-pricelist/no-down-payment', [PricelistController::class, 'showPricelistNoDP'])->name('showpricelist.nodown');
    Route::get('/admin/manager/account/create', [AccountController::class, 'CreateAccount'])->name('create.account');
    Route::get('/admin/manager/how-to-use/watch-online', [HowToUseController::class, 'ManagerWatchOnline'])->name('manager.watchonline');
    Route::get('/admin/manager/how-to-use/frequently-ask-question', [HowToUseController::class, 'ManagerFAQ'])->name('manager.faq');
});//End Group Manager Middleware

Route::middleware(['auth','role:staff'])->group(function(){
    Route::get('/admin/staff/dashboard', [StaffController::class, 'StaffDashboard'])->name('staff.dashboard');
    Route::get('/admin/staff/profile', [StaffController::class, 'StaffProfile'])->name('staff.profile');
    Route::post('/admin/staff/profile/store', [StaffController::class, 'StaffProfileStore'])->name('staff.profile.store');
    Route::get('/admin/staff/profile/change_password', [StaffController::class, 'StaffChangePassword'])->name('staff.change.password');
    Route::post('/admin/staff/profile/update_password', [StaffController::class, 'StaffUpdatePassword'])->name('staff.update.password');
    Route::get('/admin/staff/logout', [StaffController::class, 'StaffLogout'])->name('staff.logout');
    //Sidebar
    //Add Buyer Information
    Route::get('/admin/staff/purchase-lot', [PurchaseLotController::class, 'purchaseLot'])->name('staff.purchaselot');
    Route::get('/admin/staff/purchase-lot/personal-information/{id}', [PurchaseLotController::class, 'showPersonalInfoForm'])->name('staff.show.personalinfo.form');
    Route::post('/admin/staff/purchase-lot/personal-information-store', [PurchaseLotController::class, 'storePersonalInfoForm'])->name('staff.store.personalinfo.form');
    Route::get('/admin/staff/purchase-lot/personal-info/product-detail/{id}', [PurchaseLotController::class, 'showPurchaseProductDetailForm'])->name('staff.show.productdetail.form');
    Route::get('/admin/staff/purchase-lot/personal-info/product-detail-store', [PurchaseLotController::class, 'storePurchaseProductDetailForm'])->name('staff.store.productdetail.form');
    //End
    Route::get('/admin/staff/chat', [ChatController::class, 'StaffChat'])->name('staff.chat');
    Route::get('/admin/staff/add-intern', [InternController::class, 'StaffAddIntern'])->name('staff.addintern');
    //Payments Information
    Route::get('/admin/staff/payment/customer-records', [PaymentController::class, 'showCustomerPaymentRecord'])->name('payment.record');
    Route::get('/admin/staff/payment/paid-records', [PaymentController::class, 'showPaidCustomer'])->name('paid.customer');
    //How to use
    Route::get('/admin/staff/how-to-use/watch-online', [HowToUseController::class, 'StaffWatchOnline'])->name('staff.watchonline');
    Route::get('/admin/staff/how-to-use/frequently-ask-question', [HowToUseController::class, 'StaffFAQ'])->name('staff.faq');
});//End Group Staff Middleware