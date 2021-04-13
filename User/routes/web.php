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


Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');
//Route::get('/home', 'HomeController@index');

Route::get('/registration', 'RegistrationController@registrationcreate');
Route::post('/registration', 'RegistrationController@registrationstore');
Route::get('/Profile', 'ProfileController@profilecreate');
//Route::post('/login', 'LoginController@verify');
Route::get('/Edit_Profile', 'EditProfileController@editprofilecreate');
Route::post('/Edit_Profile', 'EditProfileController@editprofilestore');

Route::get('/Make_Payment', 'MakePaymentController@makepaymentcreate');
Route::post('/Make_Payment', 'MakePaymentController@makepaymentstore');

Route::get('/Add_Info', 'AddInfoController@addinfocreate');

Route::get('/Report', 'ReportController@reportcreate');
Route::post('/Report', 'ReportController@reportstore');

Route::get('/Review', 'ReviewController@reviewcreate');
Route::post('/Review', 'ReviewController@reviewstore');

Route::get('/Browse_Information', 'BrowseInformationController@browseinformationcreate');

Route::get('/Buy_Product', 'BuyProductController@buyproductcreate');
Route::post('/Buy_Product', 'BuyProductController@buyproductstore');

Route::get('/Comment', 'BuyerCommentController@buyercommentcreate');
Route::post('/Comment', 'BuyerCommentController@buyercommentcreate');

Route::get('/Edit_Comment', 'EditCommentController@editcommentcreate');
Route::post('/Edit_Comment', 'EditCommentController@editcommentcreate');

Route::get('/All_Buyer_Question', 'AllBuyerQuestionController@allbuyerquestioncreate');
Route::post('/All_Buyer_Question', 'AllBuyerQuestionController@allbuyerquestioncreate');

Route::group(['middleware'=> 'sess'], function(){
    Route::get('/home', ['uses'=>'HomeController@index']);
    
    Route::get('/home/create', 'HomeController@create')->middleware('sess')->name('home.create');
    Route::post('/home/create', 'HomeController@store');
    Route::get('/home/userlist', 'HomeController@userlist')->name('home.userlist');
    Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');
    Route::post('/home/edit/{id}', 'HomeController@update');
    Route::get('/home/delete/{id}', 'HomeController@delete');
    Route::post('/home/delete/{id}', 'HomeController@destroy');
    Route::get('/home/details/{id}', 'HomeController@show');

    Route::resource('/product', 'ProductController');
    //Route::get('/product/abc/{id}', 'ProductController@xyz');
});


