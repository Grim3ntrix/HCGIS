<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PurchaseLotController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ObituaryController;
use App\Http\Controllers\MyLotController;
use App\Http\Controllers\MyPaymentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HowToUseController;
use App\Http\Controllers\ListPriceController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\MemorialLotEntryController;


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
    return view('auth.login');
});

Route::get('/welcome/guest', [GuestController::class, 'showWelcomeGuest'])->name('welcome.guest');

require __DIR__.'/auth.php';

Route::middleware(['auth','role:customer'])->group(function () {
    Route::get('/dashboard', [CustomerController::class, 'CustomerDashboard'])->name('dashboard');
    Route::get('/customer/profile', [CustomerController::class, 'CustomerProfile'])->name('customer.profile');
    Route::post('/customer/profile/store', [CustomerController::class, 'CustomerProfileStore'])->name('customer.profile.store');
    Route::get('/customer/profile/change_password', [CustomerController::class, 'CustomerChangePassword'])->name('customer.change.password');
    Route::post('/customer/profile/update_password', [CustomerController::class, 'CustomerUpdatePassword'])->name('customer.update.password');
    Route::get('/customer/logout', [CustomerController::class, 'CustomerLogout'])->name('customer.logout');
    
    //Sidebar
    Route::get('/user/customer/chat', [ChatController::class, 'showCustomerChat'])->name('customer.show.chat');
    Route::get('/user/customer/watch-online', [HowToUseController::class, 'showCustomerWatchOnline'])->name('customer.show.watchonline');
    Route::get('/user/customer/frequently-ask-question', [HowToUseController::class, 'showCustomerFAQ'])->name('customer.show.faq');
    
    Route::get('/user/customer/mylot', [MyLotController::class, 'showMyLot'])->name('customer.show.mylot');
    
    Route::get('/user/customer/mypayment', [MyPaymentController::class, 'showMyPayment'])->name('customer.show.mypayment');
    //Sidebar

});//End Group Customer Middleware

Route::middleware(['auth','role:manager'])->group(function(){
    Route::get('/admin/manager/dashboard', [ManagerController::class, 'ManagerDashboard'])->name('manager.dashboard');
    Route::get('/admin/manager/profile', [ManagerController::class, 'ManagerProfile'])->name('manager.profile');
    Route::post('/admin/manager/profile/store', [ManagerController::class, 'ManagerProfileStore'])->name('manager.profile.store');
    Route::get('/admin/manager/profile/change_password', [ManagerController::class, 'ManagerChangePassword'])->name('manager.change.password');
    Route::post('/admin/manager/profile/update_password', [ManagerController::class, 'ManagerUpdatePassword'])->name('manager.update.password');
    Route::get('/admin/manager/logout', [ManagerController::class, 'ManagerLogout'])->name('manager.logout');
    //Sidebar

    //Discount Manager
    Route::get('/admin/manager/discount/rate', [RateController::class, 'showRate'])->name('manager.show.discount.rate');
    Route::post('/admin/manager/discount/rate/store', [RateController::class, 'storeRate'])->name('manager.store.discount.rate');
    //Discount Manager

    //ListPrice Manager
    Route::get('/admin/manager/listprice/all', [ListPriceController::class, 'showallManagerListPrice'])->name('manager.show.all.list.price');
    Route::get('/admin/manager/listprice/new', [ListPriceController::class, 'showManagerListPrice'])->name('manager.show.list.price');
    Route::post('/admin/manager/listprice/store', [ListPriceController::class, 'storeManagerListPrice'])->name('manager.store.list.price');
    Route::get('/admin/manager/listprice/view/{id}', [ListPriceController::class, 'viewManagerListPrice'])->name('manager.view.list.price');
    Route::get('/admin/manager/listprice/delete/{id}', [ListPriceController::class, 'deleteManagerListPrice'])->name('manager.delete.list.price');
    //ListPrice Manager

    //Phase
    Route::get('/admin/manager/phase', [PhaseController::class, 'showManagerPhase'])->name('manager.show.phase');
    Route::post('/admin/manager/phase/store', [PhaseController::class, 'storeManagerPhase'])->name('manager.store.phase');
    Route::get('/admin/manager/phase/edit/{id}', [PhaseController::class, 'updateManagerPhase'])->name('manager.edit.phase');
    Route::get('/admin/manager/phase/delete/{id}', [PhaseController::class, 'deleteManagerPhase'])->name('manager.delete.phase');
    //Phase

    //Account Manager
    Route::get('/admin/manager/agent/account', [AccountController::class, 'showAgentAccount'])->name('show.agent.account');
    Route::get('/admin/manager/agent/account/create',[AccountController::class, 'addAgentAccount'])->name('add.agent.account');
    Route::post('/admin/manager/account/store', [AccountController::class, 'storeAgentAccount'])->name('store.agent.account');
    Route::get('/admin/manager/account/delete/{id}', [AccountController::class, 'deleteAgentAccount'])->name('delete.agent.account');
    //Account Manager

    //Chat
    Route::get('/admin/manager/chat', [ChatController::class, 'showManagerChat'])->name('manager.chat');
    //End Chat

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

    //ListPrice Manager
    Route::get('/admin/staff/listprice/show/all', [ListPriceController::class, 'showallStaffListPrice'])->name('staff.show.all.list.price');
    //ListPrice Manager

    //Payments Information
    Route::get('admin/staff/show/payment', [PaymentController::class, 'showPayment'])->name('staff.show.payment');
    //Payments Information

    //Create Customer Account
    Route::get('/admin/staff/user/customer/account', [AccountController::class, 'showCustomerAccount'])->name('show.customer.account');
    Route::get('/admin/staff/user/customer/account/create',[AccountController::class, 'addCustomerAccount'])->name('add.customer.account');
    Route::post('/admin/staff/user/customer/account/store', [AccountController::class, 'storeCustomerAccount'])->name('store.customer.account');
    Route::get('/admin/staff/user/customer/account/delete/{id}', [AccountController::class, 'deleteCustomerAccount'])->name('delete.customer.account');
    //Create Customer Account

    //Add Buyer Information
    Route::get('/admin/staff/user/customer/registered', [PurchaseLotController::class, 'showUserCustomer'])->name('staff.show.user.customer');
    //Route::get('/admin/staff/user/customer/personalinfo/show/{id}', [PurchaseLotController::class, 'showPersonalInfo'])->name('staff.show.customer.personalinfo');
    Route::get('/admin/staff/user/customer/personalinfo/fillup/{id}', [PurchaseLotController::class, 'showPersonalInfoForm'])->name('staff.show.personalinfo.form');
    Route::post('/admin/staff/user/customer/personalinfo/store', [PurchaseLotController::class, 'storePersonalInfoForm'])->name('staff.store.personalinfo.form');
    Route::get('/admin/staff/user/customer/purchase-memorial-lot/{id}', [PurchaseLotController::class, 'showPurchaseProductDetailForm'])->name('staff.show.productdetail.form');
    
    Route::get('/admin/staff/user/customer/purchase-memorial-lot/store', [PurchaseLotController::class, 'storePurchaseProductDetailForm'])->name('staff.store.productdetail.form');
    //End

    //Memorial Lot Entry
    Route::get('/admin/staff/memorial-lot', [MemorialLotEntryController::class, 'showMemorialLotEntry'])->name('staff.show.memorial.lot');
    Route::get('/admin/staff/memorial-lot/product-entry/new', [MemorialLotEntryController::class, 'addMemorialLotEntry'])->name('staff.add.product.entry');
    Route::get('/admin/staff/memorial-lot/product/{productId}/entry/{Term}', [MemorialLotEntryController::class, 'getSelectedMode'])->name('staff.data.with.down.payment');
    Route::post('/admin/staff/memorial-lot/product-entry/store', [MemorialLotEntryController::class, 'storeMemorialLotEntry'])->name('staff.store.product.entry');
    Route::get('/admin/staff/memorial-lot/product-entry/delete/{id}', [MemorialLotEntryController::class, 'deleteMemorialLotEntry'])->name('staff.delete.product.entry');
    //Memorial Lot Entry

    Route::get('/admin/staff/chat', [ChatController::class, 'showStaffChat'])->name('staff.chat');

    Route::get('/admin/staff/obituary', [ObituaryController::class, 'showObituary'])->name('staff.show.obituary');
    
    //How to use
    Route::get('/admin/staff/how-to-use/watch-online', [HowToUseController::class, 'StaffWatchOnline'])->name('staff.watchonline');
    Route::get('/admin/staff/how-to-use/frequently-ask-question', [HowToUseController::class, 'StaffFAQ'])->name('staff.faq');
});//End Group Staff Middleware