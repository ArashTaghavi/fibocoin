<?php
Route::middleware(['web', 'auth:web', 'IsUser'])->group(function () {
    Route::get('/user-dashboard', 'DashboardController@index');
    Route::get('/user-dashboard/{all}', 'DashboardController@index')->where(['all' => '.*']);

    Route::prefix('api/user')->name('user.')->group(function () {
        Route::get('/', 'DashboardController@index');

        // ================================ Dashboard ================================
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('/requirements', 'DashboardController@requirements')->name('requirements');
            Route::get('/user-requirements', 'DashboardController@user_requirements')->name('user-requirements');
            Route::put('/user-set-phone', 'DashboardController@user_set_phone')->name('user-set-phone');
            Route::get('/user-info', 'DashboardController@user_info')->name('user-info');
        });
        // ================================ Dashboard ================================

        // ================================ Profile ================================
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/', 'ProfileController@index')->name('index');
            Route::get('/is-verified-user', 'ProfileController@is_verified_user')->name('is-verified-user');
            Route::put('/', 'ProfileController@update')->name('update');
            Route::post('/change-password', 'ProfileController@change_password')->name('change-password');
        });
        // ================================ Profile ================================

        // ================================ Documents ================================
        Route::prefix('documents')->name('documents.')->group(function () {
            Route::get('/', 'DocumentController@index')->name('index');
            Route::post('/', 'DocumentController@store')->name('store');
            Route::get('/{id}', 'DocumentController@getByID')->name('get-by-id');
            Route::put('/{id}', 'DocumentController@update')->name('update');
            Route::delete('/{id}', 'DocumentController@destroy')->name('destroy');
        });
        // ================================ Documents ================================

        // ================================ Cards ================================
        Route::prefix('cards')->name('cards.')->group(function () {
            Route::get('/', 'CardController@index')->name('index');
            Route::post('/', 'CardController@store')->name('store');
            Route::get('/{id}', 'CardController@getByID')->name('get-by-id');
            Route::put('/{id}', 'CardController@update')->name('update');
            Route::delete('/{id}', 'CardController@destroy')->name('destroy');
        });
        // ================================ Cards ================================

        // ================================ Buy Orders ================================
        Route::prefix('buy-orders')->name('buy-orders.')->group(function () {
            Route::get('/', 'BuyOrderController@index')->name('index');
            Route::post('/', 'BuyOrderController@store')->name('store');
            Route::get('/{id}', 'BuyOrderController@getByID')->name('get-by-id');
            Route::put('/{id}', 'BuyOrderController@update')->name('update');
            Route::delete('/{id}', 'BuyOrderController@destroy')->name('destroy');
            Route::get('/detail/{id}', 'BuyOrderController@detail')->name('detail');
        });
        // ================================ Buy Orders ================================

        // ================================ Sell Orders ================================
        Route::prefix('sell-orders')->name('sell-orders.')->group(function () {
            Route::get('/', 'SellOrderController@index')->name('index');
            Route::post('/', 'SellOrderController@store')->name('store');
            Route::get('/{id}', 'SellOrderController@getByID')->name('get-by-id');
            Route::put('/{id}', 'SellOrderController@update')->name('update');
            Route::delete('/{id}', 'SellOrderController@destroy')->name('destroy');
            Route::get('/detail/{id}', 'SellOrderController@detail')->name('detail');
        });
        // ================================ Sell Orders ================================

        // ================================ Currencies ================================
        Route::prefix('helper')->name('helper.')->group(function () {
            Route::get('/currencies', 'HelperController@currency')->name('currency');
        });
        // ================================ Currencies ================================

        // ================================ Notifications ================================
        Route::prefix('notifications')->name('notifications.')->group(function () {
            Route::get('/', 'NotificationController@index')->name('index');
            Route::get('/full-list', 'NotificationController@full_list')->name('full-list');
            Route::put('/read-all', 'NotificationController@read_all')->name('read_all');
        });
        // ================================ Notifications ================================

        // ================================ Wallet ================================
        Route::prefix('wallets')->name('wallets.')->group(function () {
            Route::get('/transaction', 'WalletController@transaction')->name('transaction');
            Route::get('/balance', 'WalletController@balance')->name('balance');
        });
        // ================================ Wallet ================================

        // ================================ Sell Orders ================================
        Route::prefix('currency-users')->name('currency-users.')->group(function () {
            Route::get('/', 'CurrencyUserController@index')->name('index');
            Route::get('/currencies-user-list/{currency_id}', 'CurrencyUserController@currencies_user_list')->name('currencies-user-list');
            Route::post('/', 'CurrencyUserController@store')->name('store');
            Route::get('/{id}', 'CurrencyUserController@getByID')->name('get-by-id');
            Route::put('/{id}', 'CurrencyUserController@update')->name('update');
            Route::delete('/{id}', 'CurrencyUserController@destroy')->name('destroy');
            Route::get('/get-by-id-from-site/{id}', 'CurrencyUserController@getByIdFromSite')->name('get-by-id-from-site');
        });
        // ================================ Sell Orders ================================


        // ================================ Payment Requests ================================
        Route::prefix('payment-requests')->name('payment-requests.')->group(function () {
            Route::get('/', 'PaymentRequestController@index')->name('index');
            Route::post('/', 'PaymentRequestController@store')->name('store');
        });
        // ================================ Payment Requests ================================


        // ================================ Currency User Payments ================================
        Route::prefix('currency-user-payments')->name('currency-user-payments.')->group(function () {
            Route::get('/list', 'CurrencyUserPaymentController@list')->name('list');
            Route::get('/{id}', 'CurrencyUserPaymentController@index')->name('index');
            Route::post('/{id}', 'CurrencyUserPaymentController@store')->name('store');
        });
        // ================================ Currency User Payments ================================

        // ================================ Tickets ================================
        Route::prefix('tickets')->name('tickets.')->group(function () {
            Route::get('/list', 'TicketController@list')->name('list');
            Route::post('/', 'TicketController@store')->name('store');
        });
        // ================================ Tickets ================================


        // ================================ Finances ================================
        Route::prefix('finances')->name('finances.')->group(function () {
            Route::get('/', 'FinanceController@index')->name('index');
        });
        // ================================ Finances ================================

    });


});


