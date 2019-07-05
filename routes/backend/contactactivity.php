<?php

/**
 * ContactActivity Management
 * All route names are prefixed with 'admin.contact_activity'.
 */
Route::group(
    [
        'namespace' => 'ContactActivity',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * ContactActivity CRUD
         */
        Route::resource('contact_activity', 'ContactActivityController');
        Route::get(
            'contact/{id}/contact_activities',
            'ContactActivityController@contact'
        )->name('contact_activity.contact');
        Route::get(
            'type/{id}/contact_activities',
            'ContactActivityController@type'
        )->name('contact_activity.type');
        Route::get(
            'outcome/{id}/contact_activities',
            'ContactActivityController@outcome'
        )->name('contact_activity.outcome');
    }
);
