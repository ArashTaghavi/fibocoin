<?php
Route::middleware(['web', 'auth:web', 'IsAdmin'])->group(function () {
    Route::get('/admin-dashboard', 'DashboardController@index');
    Route::get('/admin-dashboard/{all}', 'DashboardController@index')->where(['all' => '.*']);

    Route::prefix('api/admin')->name('admin.')->group(function () {
        Route::get('/', 'DashboardController@index');

        // ================================ Profile ================================
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/', 'ProfileController@index')->name('index');
            Route::put('/', 'ProfileController@update')->name('update');
            Route::post('/change-password', 'ProfileController@change_password')->name('change-password');
        });
        // ================================ Profile ================================

        // ================================ Users ================================
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', 'UserController@index')->name('index');
            Route::post('/', 'UserController@store')->name('store');
            Route::get('/search/{search_value}', 'UserController@search')->name('search');
            Route::get('/block/{id}', 'UserController@block')->name('block');
            Route::get('/verify-phone/{id}', 'UserController@verify_phone')->name('verify-phone');
            Route::get('/detail/{id}', 'UserController@detail')->name('detail');
            Route::get('/buy-orders/{id}', 'UserController@buy_orders')->name('buy-orders');
            Route::get('/sell-orders/{id}', 'UserController@sell_orders')->name('sell-orders');
            Route::get('/payment-requests/{id}', 'UserController@payment_requests')->name('payment-requests');
            Route::get('/cards/{id}', 'UserController@cards')->name('cards');
            Route::get('/card-search/{id}/{approved}', 'UserController@card_search')->name('card-search');
            Route::get('/card-approved/{id}/{confirmation}', 'UserController@card_approved')->name('card-approved');
            Route::get('/buy-order-search/{id}/{status}', 'UserController@buy_order_search')->name('buy-order-search');
            Route::get('/sell-order-search/{id}/{status}', 'UserController@sell_order_search')->name('sell-order-search');
            Route::get('/payment-request-search/{id}/{status}', 'UserController@payment_request_search')->name('payment-requests-search');
            Route::get('/buy-order-status/{id}/{status}', 'UserController@buy_order_status')->name('buy-order-status');
            Route::put('/sell-order-status/{id}', 'UserController@sell_order_status')->name('sell-order-status');
            Route::put('/payment-request-status/{id}', 'UserController@payment_request_status')->name('payment-request-status');
            Route::post('/wallet/{id}', 'UserController@wallet')->name('wallet');
            Route::get('/documents/{id}', 'UserController@documents')->name('documents');
            Route::get('/document-approved/{id}/{confirmation}', 'UserController@document_approved')->name('document-approved');
        });
        // ================================ Users ================================

        // ================================ Currency ================================
        Route::prefix('currencies')->name('currencies.')->group(function () {
            Route::get('/', 'CurrencyController@index')->name('index');
            Route::post('/', 'CurrencyController@store')->name('store');
            Route::get('/get/{currency}', 'CurrencyController@get')->name('get');
            Route::put('/{currency}', 'CurrencyController@update')->name('update');
            Route::get('/active/{currency}', 'CurrencyController@active')->name('active');
            Route::delete('/{currency}', 'CurrencyController@destroy')->name('destroy');
        });
        // ================================ Currency ================================

        // ================================ Sliders ================================
        Route::prefix('sliders')->name('sliders.')->group(function () {
            Route::get('/', 'SliderController@index')->name('index');
            Route::post('/', 'SliderController@store')->name('store');
            Route::get('/published/{slider}', 'SliderController@published')->name('published');
            Route::delete('/{slider}', 'SliderController@destroy')->name('destroy');
        });
        // ================================ Sliders ================================

        // ================================ Comments ================================
        Route::prefix('comments')->name('comments.')->group(function () {
            Route::get('/', 'CommentController@index')->name('index');
            Route::get('/approved/{comment}', 'CommentController@approved')->name('approved');
            Route::delete('/{comment}', 'CommentController@destroy')->name('destroy');
        });
        // ================================ Comments ================================

        // ================================ Tickets ================================
        Route::prefix('tickets')->name('tickets.')->group(function () {
            Route::get('/user-list/{search_value?}', 'TicketController@user_list')->name('user-list');
            Route::get('/get-by-user-id/{id}', 'TicketController@getByUserId')->name('get-by-user-id');
            Route::post('/', 'TicketController@store')->name('store');
        });
        // ================================ Tickets ================================
    });
});


