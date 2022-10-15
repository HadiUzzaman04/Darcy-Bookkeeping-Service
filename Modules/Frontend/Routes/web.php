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
    Route::get('/', function () {
    return redirect()->route('home');
    });

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
    Route::get('/testimonial','FrontendController@testimonial')->name('testimonial');
    Route::get('/all-software','FrontendController@allsoftware')->name('allsoftware');
    Route::get('/myob','FrontendController@myob')->name('myob');
    Route::get('/rackon','FrontendController@rackon')->name('rackon');
    Route::get('/xero','FrontendController@xero')->name('xero');
    Route::get('/saasu','FrontendController@saasu')->name('saasu');
    Route::get('/quick-books-online','FrontendController@quickbooksonline')->name('quickbooks');

    //contact us
    Route::get('/contactus','ContactusController@contactus')->name('contactus');
    Route::post('contactus/store','ContactusController@create')->name('contactus.store');
});
