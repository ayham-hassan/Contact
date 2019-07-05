<?php

/**
 * Type Management
 * All route names are prefixed with 'admin.type'.
 */
Route::group(
    [
        'namespace' => 'Type',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Type CRUD
         */
        Route::resource('type', 'TypeController');
    }
);
