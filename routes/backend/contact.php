<?php

/**
 * Contact Management
 * All route names are prefixed with 'admin.contact'.
 */
Route::group(
    [
        'namespace' => 'Contact',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Contact CRUD
         */
        Route::resource('contact', 'ContactController');
        Route::get(
            'customer/{id}/contacts',
            'ContactController@customer'
        )->name('contact.customer');
        Route::get('status/{id}/contacts', 'ContactController@status')->name(
            'contact.status'
        );
    }
);
