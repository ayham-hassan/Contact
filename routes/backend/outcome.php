<?php

/**
 * Outcome Management
 * All route names are prefixed with 'admin.outcome'.
 */
Route::group(
    [
        'namespace' => 'Outcome',
        'middleware' => 'role:administrator'
    ],
    function () {
        /*
         * Outcome CRUD
         */
        Route::resource('outcome', 'OutcomeController');
    }
);
