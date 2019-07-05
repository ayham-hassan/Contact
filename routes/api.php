<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//start_Address_start
Route::resource('address', 'API\AddressAPIController');

//end_Address_end

//start_Customer_start
Route::resource('customer', 'API\CustomerAPIController');

//end_Customer_end

//start_CustomerAddress_start
Route::resource('customer_address', 'API\CustomerAddressAPIController');

//end_CustomerAddress_end

//start_Status_start
Route::resource('status', 'API\StatusAPIController');

//end_Status_end

//*****Do Not Delete Me
