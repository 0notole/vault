<?php

Route::group(['prefix' => config('vault.path'), 'as' => 'admin.'], function () {

    Route::group(['middleware' => 'web'], function () {
        Route::get('/login', '0notole\Vault\Controllers\AuthController@login')->name('login');
        Route::post('/login', '0notole\Vault\Controllers\AuthController@auth')->name('auth');
        Route::any('/logout', '0notole\Vault\Controllers\AuthController@logout')->name('logout');
    });

    Route::group(['middleware' => ['web', 'admin']], function () {

        // Main page
        Route::get('/', '0notole\Vault\Controllers\MainController@index')->name('home');

        // My profile
        Route::any('/help', '0notole\Vault\Controllers\MainController@help')->name('help');

        // Resource
        Route::group(['as' => 'model.'], function () {
            Route::get('/{slug}/export', '0notole\Vault\Controllers\ResourceController@export')->name('export');
            Route::post('/{slug}/import', '0notole\Vault\Controllers\ResourceController@import')->name('import');
            Route::get('/{slug}', '0notole\Vault\Controllers\ResourceController@index')->name('index');
            Route::get('/{slug}/create', '0notole\Vault\Controllers\ResourceController@create')->name('create');
            Route::post('/{slug}/store', '0notole\Vault\Controllers\ResourceController@store')->name('store');
            // Route::get('/{slug}/{id}', '0notole\Vault\Controllers\ResourceController@show')->name('show');
            Route::post('/{slug}/actions', '0notole\Vault\Controllers\ResourceController@actions')->name('actions');
            Route::get('/{slug}/{id}/edit', '0notole\Vault\Controllers\ResourceController@edit')->name('edit');
            Route::post('/{slug}/{id}/update', '0notole\Vault\Controllers\ResourceController@update')->name('update');
            Route::post('/{slug}/{id}/delete', '0notole\Vault\Controllers\ResourceController@destroy')->name('delete');
        });

    });

});
