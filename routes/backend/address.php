<?php

/**
 * Address Management
 * All route names are prefixed with 'admin.address'.
 */
Route::group(
    [
        'namespace' => 'Address',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Address CRUD
         */
        Route::resource('address', 'AddressController');
        Route::get(
            'customer/{id}/addresses',
            'AddressController@customer'
        )->name('address.customer');
    }
);
