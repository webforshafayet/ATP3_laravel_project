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

Route::get('/', function () {
    //return view('welcome');
    echo "welcome";
});

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');


Route::get('/registration', 'RegisterController@index')->name("registration");
Route::post('/registration', 'RegisterController@verify');
Route::get('/admin','AdminController@index');

Route::get('/logout', 'LogoutController@index');
Route::get('/specialist', 'SpecialistController@index');

Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/product/{slug}', 'ProductsController@show')->name('products.show');
Route::get('/search', 'PagesController@search')->name('search');


Route::get('/customer', 'CustomerController@index');

Route::get('/sales', 'SalesController@index');
Route::get('/system/sales/physical_store', 'SalesController@physicalStore');
Route::get('/system/sales/virtual_store', 'SalesController@virtualStore');
Route::get('/system/sales/e-marketing', 'SalesController@emarketing');
//Route::get('/home', 'HomeController@index');

Route::group(['middleware'=> 'sess'], function(){
    Route::get('/home', ['uses'=>'HomeController@index']);
    
    Route::get('/home/create', 'HomeController@create')->middleware('sess')->name('home.create');
    Route::post('/home/create', 'HomeController@store');
    Route::get('/home/userlist', 'HomeController@userlist')->name('home.userlist');
    Route::get('/home/seller', 'HomeController@seller')->name('home.seller');
    Route::get('/home/sellerlist', 'HomeController@seller')->name('home.sellerlist');
    Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');

    Route::get('/home', 'HomeController@index')->name('home.index');

    Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
    Route::get('/home/notification', 'HomeController@notification')->name('home.notification');
    Route::get('/home/help_center', 'HomeController@help_center')->name('home.help_center');
    Route::get('/home/comment', 'HomeController@comment')->name('home.comment');
    Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
      Route::get('/home/editprofile', 'HomeController@editprofile')->name('home.editprofile');
    Route::post('/home/editprofile', 'HomeController@updateProfile');
Route::get('/home/deleteprofile/{id}', 'HomeController@deleteprofile');

    Route::post('/home/edit/{id}', 'HomeController@update');
    Route::get('/home/delete/{id}', 'HomeController@delete');
    Route::post('/home/delete/{id}', 'HomeController@destroy');
    Route::get('/home/details/{id}', 'HomeController@show');
   
   Route::get('/product', 'Frontend\ProductsController@index')->name('product.index');
Route::get('/product', 'Frontend\ProductsController@show')->name('product.show');
Route::get('/search', 'Frontend\PagesController@search')->name('product.search');

 

   

   


    Route::resource('/product', 'ProductController');
    //Route::get('/product/abc/{id}', 'ProductController@xyz');
});


