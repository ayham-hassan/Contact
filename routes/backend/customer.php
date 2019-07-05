<?php

/**
 * Customer Management
 * All route names are prefixed with 'admin.customer'.
 */
Route::group(
    [
        'namespace' => 'Customer',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Customer CRUD
         */
        Route::resource('customer', 'CustomerController');
        Route::get(
            'address/{id}/customers',
            'CustomerController@address'
        )->name('customer.address');
    }
);
