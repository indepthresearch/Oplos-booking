<?php

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

use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::redirect('/quote','/indepth.quote.blade.php',301);
Route::get('/index', 'IndexController@home')->name('home.index');
Route::get('/about', 'AboutController@show');
Route::get('/product', 'ProductController@show');



Route::get('/quote',function()
{
	return view ('quote');
});
 
 Route::get('/index1',function()
{
	return view ('index1');
});

Route::get('/about',function()
{
	return view ('about');
});
Route::get('/product',function()
{
	return view ('product');
});
Route::get('index/{product}','ProductController@index')->name('product.show');
Route::get('/index',function()
{
	return view ('index');
});
Route::get('/deals',function()
{
	return view ('deals');
});

Route::get('deals','DealController@create')->name('deals');

/* Route::get('/book',function()
{
	return view ('book');
}); */
Route::get('/book','BookController@index')->name('book.show');
Route::post('/book/{product}','BookController@checkout')->name('book.checkout');
Route::get('auth/login',function()
{
	return view ('login');
});
Route::get('auth/register',function()
{
	return view ('register');
});
//Route::get('/listing',function()
//{
	//return view ('listing');
//});
	
	Route::get('/test',function()
{
	return view ('test');
});
	
	//Route::get('index', 'ListingController@index')->name('form');
	//Route::post('index', 'ListingController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('listing','ListingController');
//Route::get("listing",'ListingController@index');
//Route::post("/listing",'ListingController@store');


/* Route::post('/book','BookController@store'); */


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/* Route::resource('views.book','BookController'); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('payment','ControllerPayment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/rooms', 'RoomsController@index')->name('rooms');
Route::get('/rooms', 'RoomsController@index')->name('room');
	Route::get('/rooms',function()
{
	return view ('rooms');
});
Route::get('/filters', 'FilterController@index')->name('filters');

Route::get('listed/{query}',function($query)
{
	return App\listed::search($query)->get();
});

Route::get('search','IndexController@search')->name('search');
Route::get('checkout','CheckoutController@index')->name('checkout');
/* Route::get('search','SearchController@index')->name('search'); */


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('listing', 'ListingController@show')->name('listing');
Route::get('rooms/{accomodation}', 'AccomodationController@show')->name('accomodation');
Route::get('/book/{product}', 'CartController@index')->name('cart');
Route::post('/book', 'CartController@store')->name('cart.store');

	Route::get('/empty',function()
{
	Cart::destroy();
	return view('index');
});
