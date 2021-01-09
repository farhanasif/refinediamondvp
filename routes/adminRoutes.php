<?php 

//ADMIN SECTION ROUTES 
Route::middleware('auth')->group(function () {

    //ALL PROFILE  ROUTES 
    Route::get('/admin/profile','Admin\ProfileController@profile')->name('admin.profile');
    Route::post('/admin/profile/update/{id}','Admin\ProfileController@profileUpdate')->name('admin.profile.update');
    Route::get('/admin/change/password','Admin\ProfileController@changePassword')->name('admin.change.password');
    Route::post('/admin/update/password','Admin\ProfileController@updatePassword')->name('admin.update.password');
    Route::get('/admin/change/transaction','Admin\ProfileManagementController@changeTransactionPassword')->name('admin.change.transaction');


    // ALL USER ROUTES 
    Route::get('/user/all-user', 'UserController@index')->name('allUser');
    Route::get('/user/edit-user/{id}', 'UserController@edit')->name('editUser');
    Route::post('/user/update-user/{id}', 'UserController@update')->name('updateUser');
    Route::get('/user/delete-user/{id}', 'UserController@delete')->name('deleteUser');

    // ALL Order ROUTES 
    Route::get('/order/all-order', 'OrderController@index')->name('allOrder');
    Route::get('/order/delete/{id}','OrderController@delete')->name('deleteOrder');
    Route::get('/order/edit/{id}','OrderController@edit')->name('editOrder');
    Route::post('/order/update/{id}','OrderController@update')->name('updateOrder');

    // ALL CATEGORY ROUTES
    Route::get('/category/all-category', 'CategoryController@index')->name('allCategory');
    Route::get('/category/create-category', 'CategoryController@create')->name('createCategory');
    Route::post('/category/store-category', 'CategoryController@store')->name('storeCategory');
    Route::get('/category/edit-category/{id}', 'CategoryController@edit')->name('editCategory');
    Route::post('/category/update-category/{id}', 'CategoryController@update')->name('updateCategory');
    Route::get('/category/delete-category/{id}', 'CategoryController@delete')->name('deleteCategory');

    // ALL SUB CATEGORY ROUTES
    Route::get('/sub-category/all-sub-category', 'SubCategoryController@index')->name('allSubCategory');
    Route::get('/sub-category/create-sub-category', 'SubCategoryController@create')->name('createSubCategory');
    Route::post('/sub-category/store-sub-category', 'SubCategoryController@store')->name('storeSubCategory');
    Route::get('/sub-category/edit-sub-category/{id}', 'SubCategoryController@edit')->name('editSubCategory');
    Route::post('/sub-category/update-sub-category/{id}', 'SubCategoryController@update')->name('updateSubCategory');
    Route::get('/sub-category/delete-sub-category/{id}', 'SubCategoryController@delete')->name('deleteSubCategory');

    // ALL SUB CATEGORY ROUTES
    Route::get('/product/all-product', 'ProductController@index')->name('allProduct');
    Route::get('/product/create-product', 'ProductController@create')->name('createProduct');
    Route::post('/product/store-product', 'ProductController@store')->name('storeProduct');
    Route::get('/product/edit-product/{id}', 'ProductController@edit')->name('editProduct');
    Route::get('/product/view-product/{id}', 'ProductController@view_product')->name('view_product');
    Route::post('/product/update-product/{id}', 'ProductController@update')->name('updateProduct');
    Route::get('/product/delete-product/{id}', 'ProductController@delete')->name('deleteProduct');

    // ALL POINTS ROUTES
    Route::get('/point/all-point', 'PointsController@index')->name('allPoint');
    Route::get('/point/create-point', 'PointsController@create')->name('createPoint');
    Route::post('/point/store-point', 'PointsController@store')->name('storePoint');
    Route::get('/point/edit-point/{id}', 'PointsController@edit')->name('editPoint');
    Route::post('/point/update-point/{id}', 'PointsController@update')->name('updatePoint');
    Route::get('/point/delete-point/{id}', 'PointsController@delete')->name('deletePoint');

    // ALL MARKETING STUFF ROUTES
    Route::get('/marketing-stuff/all-marketing-stuff', 'MarketingStuffController@index')->name('allMarketingStuff');
    Route::get('/marketing-stuff/create-marketing-stuff', 'MarketingStuffController@create')->name('createMarketingStuff');
    Route::post('/marketing-stuff/store-marketing-stuff', 'MarketingStuffController@store')->name('storeMarketingStuff');
    Route::get('/marketing-stuff/edit-marketing-stuff/{id}', 'MarketingStuffController@edit')->name('editMarketingStuff');
    Route::post('/marketing-stuff/update-marketing-stuff/{id}', 'MarketingStuffController@update')->name('updateMarketingStuff');
    Route::get('/marketing-stuff/delete-marketing-stuff/{id}', 'MarketingStuffController@delete')->name('deleteMarketingStuff');

});
