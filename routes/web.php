<?php

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

Route::get('/clear-cache', function() {
  $exitCode = Artisan::call('config:clear');
  $exitCode = Artisan::call('cache:clear');
  $exitCode = Artisan::call('config:cache');
  return 'DONE'; //Return anything
});

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');

    // START ALL FRONTEND ROUTES
Route::get('/', 'FrontendController@index')->name('front_home');

// ALL CART ROUTES
Route::get('/cart-details', 'CartController@cart');
Route::get('/cart', 'CartController@cartView');
Route::post('/add-to-cart/{id}', 'CartController@addToCart');
Route::patch('update-cart', 'CartController@update');
Route::delete('remove-from-cart', 'CartController@remove');

// ALL CHECKOUT ROUTES
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/order-checkout', 'CheckoutController@orderCheckout');

Route::get('/view-product-details/{id}','FrontendController@viewDetailsProduct')->name('viewDetailsProduct');
Route::get('/user-registration', 'UserRegisterController@createUserRegistration')->name('userRegistration');
Route::post('/user/registration', 'UserRegisterController@store')->name('user.register');

//check sponsor id
Route::get('/sponsor','UserRegisterController@sponsor')->name('user.sponsor');

Route::get('/subcategory/{id}', 'FrontendController@subcategoryWiseShow')->name('subcategoryWiseShow');
Route::get('/subcategory-product/{id}', 'FrontendController@subcategoryWiseProduct')->name('subcategoryWiseProduct');
Route::get('/order/product/{id}','FrontendController@order')->name('order.product');
Route::post('/product/order/','FrontendController@productOrder')->name('orderProduct');

// ALL PRODUCT DETAILS
Route::get('/home/product/all-product','FrontendController@allProductShow');
  //END FRONTEND ROUTES

Route::get('/user-dashboard', ['middleware'=>'user', 'uses'=>'AdminController@userDashboard', 'as' => 'user-dashboard']);
Route::get('/promoter-dashboard', ['middleware'=>'promoter', 'uses'=>'AdminController@promoterDashboard','as' => 'promoter-dashboard']);
Route::get('/dashboard', ['middleware'=>'admin', 'uses'=>'AdminController@index','as' => 'dashboard']);
//Promotor management
Route::get('/promotor/profile','Promotor\ProfileManagementController@profile')->name('promotor.profile');
Route::get('/promotor/change/password','Promotor\ProfileManagementController@changePassword')->name('change.password');
Route::post('/update/password','Promotor\ProfileManagementController@updatePassword')
    ->name('update.password');
Route::get('/change/transaction','Promotor\ProfileManagementController@changeTransaction')->name('change.transaction');









//////////-------FARHAN ASIF-----------///////////
Route::get('/promotor/tree/{id?}/{bc?}','Promotor\TreeController@index')->name('promotor.tree');
Route::get('/promotor/entry/{id}','Promotor\TreeController@entry')->name('promotor.entry');
Route::get('promotor/savepromoter', 'Promotor\TreeController@savePromoter')->name('promotor.save');
Route::get('/promotor/newentry','Promotor\TreeController@newentry')->name('promotor.newentry');
Route::post('/promotor/checkplacement','Promotor\TreeController@checkplacement')->name('promotor.checkplacement');
Route::post('/promotor/checkplacementwithbc','Promotor\TreeController@checkplacementwithbc')->name('promotor.checkplacementwithbc');
Route::post('/promotor/savenewpromoter','Promotor\TreeController@savenewpromoter')->name('promotor.savenewpromoter');
Route::post('/promotor/getPromotorDetails','Promotor\TreeController@getPromotorDetails')->name('promotor.getPromotorDetails');
Route::get('/promotor/view','Promotor\TreeController@getSponsorTree')->name('promotor.view');
















//Product Purchase
Route::get('/product/purchase','Promotor\PurchaseController@productPurchase')->name('product.purchase');
Route::get('/product/purchase/point/report','Promotor\PurchaseController@productPurchasePoint')->name('product.purchase.point.report');

//Purchase Management
Route::get('/add/purchase/amount','Promotor\purchaseManagementController@createPurchaseAmount')->name('purchase.amount');
Route::get('/recieved/from/company','Promotor\purchaseManagementController@recievedFromCompany')->name('recieved.from.company');
Route::get('/recieved/from/self','Promotor\purchaseManagementController@recievedFromSelf')->name('recieved.from.self');



  Route::middleware('user')->group(function () {
    Route::get('/user/all-order-history', 'UserDashboardController@allOrder')->name('allOrderHistory');
    Route::get('/my-account/user/privacy-policy', 'UserDashboardController@privacyPolicy');
  });
