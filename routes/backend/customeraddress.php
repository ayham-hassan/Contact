<?php

/**
 * CustomerAddress Management
 * All route names are prefixed with 'admin.customer_address'.
 */
Route::group(
    [
        'namespace' => 'CustomerAddress',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * CustomerAddress CRUD
         */
        Route::resource('customer_address', 'CustomerAddressController');
        Route::get(
            'customer/{id}/customer_addresses',
            'CustomerAddressController@customer'
        )->name('customer_address.customer');
        Route::get(
            'address/{id}/customer_addresses',
            'CustomerAddressController@address'
        )->name('customer_address.address');
    }
);
