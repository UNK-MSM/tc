<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontEndController@index');

Route::get('/index', 'FrontEndController@index');

Route::get('/landing/page1', 'FrontEndController@first_landing_page');

Route::get('/landing/page2', 'FrontEndController@second_landing_page');

Route::get('/index/{fragment}', 'FrontEndController@indexFragment');

Route::get('/signup/{plan}', ['as' => 'signup', 'uses' =>'FrontEndController@signup']);

Route::get('/registerStocks', ['as' => 'register_stocks', 'uses' => 'FrontEndController@register_stocks']);

Route::get('/registerStocksNoProtection', ['as' => 'register_stocks_noprotection', 'uses' => 'FrontEndController@register_stocks_noprotection']);

Route::get('/pricing', ['as' => 'registration_calculator', 'uses' => 'FrontEndController@registration_calculator']);

Route::get('/contact', ['as' => 'contact_us_form', 'uses' => 'FrontEndController@contact_us_form']);

Route::get('/login', ['as' => 'login', 'uses' => 'FrontEndController@login']);

Route::post('/doRegisterStocks', 'FrontEndController@do_register_stocks');

Route::post('/doContactUs', 'FrontEndController@do_contact_us');

Route::get('/css/css_content', 'FrontEndController@css_content');

Route::get('/account_setup_pending', 'FrontEndController@account_setup_pending');

Route::get('/password_reset_success', 'FrontEndController@password_reset_success');

Route::get('/disclaimer', 'FrontEndController@policy');

Route::get('/privacy', 'FrontEndController@privacy');

Route::get('/terms', 'FrontEndController@terms');

Route::get('/activate', 'FrontEndController@activate_account');

Route::get('/about', 'FrontEndController@guide');

Route::get('/activation_pending', ['as' => 'activation_pending', 'uses' => 'FrontEndController@activation_pending']);

Route::get('/portal/index', 'PortalController@index');

Route::get('/portal/video_library', ['as' => 'video_library', 'uses' => 'PortalController@video_library']);

Route::get('/portal/my_stocks', ['as' => 'my_stocks', 'uses' => 'PortalController@my_stocks']);

Route::get('/portal/my_account', ['as' => 'my_account', 'uses' => 'PortalController@my_account']);

Route::get('/portal/new_membership', ['as' => 'new_membership', 'uses' => 'PortalController@new_membership']);

Route::get('/portal/new_membership_market', ['as' => 'new_membership_market', 'uses' => 'PortalController@new_membership_market']);

Route::get('/portal/memberships_archive', ['as' => 'memberships_archive', 'uses' => 'PortalController@memberships_archive']);

Route::get('/portal/stock/{serialNo}', 'PortalController@stock');

Route::post('/portal/completeStockRegistration', 'PortalController@complete_stock_registration');

Route::get('/portal/contactUs', 'PortalController@contact_us');

Route::get('/portal/help', 'PortalController@help');

Route::get('/portal/viewChargeDetails', 'PortalController@view_charge_details');

Route::group(['prefix' => '/portal/api'], function () {

	Route::get('stocks', 'StocksController@getStocks');

	Route::get('stocksUrgentCausePrediction/{stockSerialNo}/{causeSerialNo}', 'StocksController@stockUrgentCausePrediction');

	Route::get('planRenewalPrices/{planInstanceSerialNo}', 'PortalController@get_plan_renewal_prices');

	Route::get('checkDiscountCode/{discounCode}', 'PortalController@check_discount_code');

	Route::get('stocksDailyCalculations/{stockSerialNo}', 'StocksController@getStockDailyCalculations');

	Route::get('stocksClosingReading/{stockSerialNo}', 'StocksController@getStockClosingReadings');

	Route::get('stocksUrgentCauses/{stockSerialNo}', 'StocksController@getStockUrgentCalculations');

	Route::get('marquee', 'NewsController@getMarqueeContents');

	Route::get('news', 'NewsController@getNews');

});

Route::auth();

Route::post('/portal/change_password', 'PortalController@change_password');

Route::get('/home', 'HomeController@index');
