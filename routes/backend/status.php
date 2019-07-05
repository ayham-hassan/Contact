<?php

/**
 * Status Management
 * All route names are prefixed with 'admin.status'.
 */
Route::group(
    [
        'namespace' => 'Status',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Status CRUD
         */
        Route::resource('status', 'StatusController');
    }
);
