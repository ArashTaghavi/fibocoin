<?php
Route::middleware(['web'])->group(function () {
    Route::get('/', 'SiteController@index')->name('index');
    Route::get('/blog', 'SiteController@blog')->name('blog');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/login', 'Auth\LoginController@login')->name('doLogin');
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@create')->name('doRegister');
    Route::post('/verify', 'Auth\RegisterController@verify')->name('verify');
    Route::get('/questions', 'SiteController@questions')->name('questions');
    Route::get('/why-fibocoin', 'SiteController@why_fibocoin')->name('why-fibocoin');
    Route::get('/comments', 'SiteController@comments')->name('comments');
    Route::post('/store-comment', 'SiteController@store_comment')->name('store-comment');



});