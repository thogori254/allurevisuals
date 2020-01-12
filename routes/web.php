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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'FeedbackFormController@createform');

Route::post('/', 'FeedbackFormController@storeform');


Route::get('/products', 'OrderFormController@createform');

Route::post('/products', 'OrderFormController@storeform');


// Route::get('/products', function () {
//     return view('products');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::post('/contact', function(Request $request){
// 	Mail::send(new ContactMail($request));
// 	return redirect('/');
// });

Route::get('contact', 'EnquiryFormController@createform');

Route::post('contact', 'EnquiryFormController@storeform');

Route::get('/portfolio', function () {
    return view('portfolio');
});