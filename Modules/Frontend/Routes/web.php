<?php
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('website')->group(function() {
    Route::get('/home', 'FrontendController@index')->name('home');
    Route::get('/payroll-service','FrontendController@payrollservice')->name('payroll.service');
    Route::get('/account-payable','FrontendController@accountspayable')->name('account.payable');
    Route::get('/accounts-recivable','FrontendController@accountsrecivable')->name('accounts.recievable');
    Route::get('/virtual-CFO','FrontendController@virtualcfo')->name('virtual.cfo');
    Route::get('/bas-service','FrontendController@basservice')->name('bas.service');
    Route::get('/catch-up-bookkeeping','FrontendController@catchupbookkeeping')->name('catch.up.bookkeeping');
    Route::get('/accounting','FrontendController@accounting')->name('accounting');
    Route::get('/aboutus','FrontendController@aboutus')->name('aboutus');
    Route::get('/contactus','ContactusController@contactus')->name('contactus');
    Route::get('/testimonial','FrontendController@testimonial')->name('testimonial');
    Route::get('/all-software','FrontendController@allsoftware')->name('allsoftware');
});
