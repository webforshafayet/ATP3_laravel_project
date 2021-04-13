<?php

use App\Http\Controllers\HomeController;
use App\Models\adminuser_msg;
use App\Models\useradmin_msg;
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
    return view('welcome');


});

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login', 'App\Http\Controllers\LoginController@verify');
Route::get('/logout', 'App\Http\Controllers\LogoutController@index');





Route::group(['middleware'=> 'sess'], function(){
Route::get('/home', 'App\Http\Controllers\HomeController@index')->middleware('sess');


// Admin curd------------------------------------------------------------------------------------------------
Route::get('/home/admin_profile', 'App\Http\Controllers\adminprofileController@admin_profile_show');

Route::get('/home/admin_profile_edit/{id}', 'App\Http\Controllers\adminprofileController@admin_profile_edit');
Route::post('/home/admin_profile_edit/{id}', 'App\Http\Controllers\adminprofileController@admin_profile_update');

//Route::get('/home/admin_profile_details/{id}', 'App\Http\Controllers\HomeController@admin_profile_fullshow');



// userlist curd------------------------------------------------------------------------------------------------

Route::get('/home/userlist', 'App\Http\Controllers\userlistController@userlist');
Route::get('/home/userlist/search', 'App\Http\Controllers\userlistController@userlist_search');

Route::get('/home/usercreate', 'App\Http\Controllers\userlistController@usercreate');
Route::post('/home/usercreate', 'App\Http\Controllers\userlistController@userstore');

Route::get('/home/useredit/{id}', 'App\Http\Controllers\userlistController@useredit');//edittttt start
Route::post('/home/useredit/{id}', 'App\Http\Controllers\userlistController@userupdate');

Route::get('/home/userdelete/{id}', 'App\Http\Controllers\userlistController@userdelete');
Route::post('/home/userdelete/{id}', 'App\Http\Controllers\userlistController@userdestroy');

Route::get('/home/userdetails/{id}', 'App\Http\Controllers\userlistController@usershow');



//Verified userlist curd------------------------------------------------------------------------------------------------

Route::get('/home/V_userlist', 'App\Http\Controllers\verifieduserlistController@V_userlist');
Route::get('/home/V_userlist/search', 'App\Http\Controllers\verifieduserlistController@V_userlist_search');

Route::get('/home/V_usercreate', 'App\Http\Controllers\verifieduserlistController@V_usercreate');
Route::post('/home/V_usercreate', 'App\Http\Controllers\verifieduserlistController@V_userstore');

Route::get('/home/V_useredit/{id}', 'App\Http\Controllers\verifieduserlistController@V_useredit');//edittttt start
Route::post('/home/V_useredit/{id}', 'App\Http\Controllers\verifieduserlistController@V_userupdate');

Route::get('/home/V_userdelete/{id}', 'App\Http\Controllers\verifieduserlistController@V_userdelete');
Route::post('/home/V_userdelete/{id}', 'App\Http\Controllers\verifieduserlistController@V_userdestroy');

Route::get('/home/V_userdetails/{id}', 'App\Http\Controllers\verifieduserlistController@V_usershow');



// specialist curd------------------------------------------------------------------------------------------------

Route::get('/home/specialist', 'App\Http\Controllers\specialistController@specialist');
Route::get('/home/specialist/search', 'App\Http\Controllers\specialistController@specialist_search');

Route::get('/home/specialistcreate', 'App\Http\Controllers\specialistController@specialistcreate');
Route::post('/home/specialistcreate', 'App\Http\Controllers\specialistController@specialiststore');

Route::get('/home/specialistedit/{id}', 'App\Http\Controllers\specialistController@specialistedit');//edittttt start
Route::post('/home/specialistedit/{id}', 'App\Http\Controllers\specialistController@specialistupdate');

Route::get('/home/specialistdelete/{id}', 'App\Http\Controllers\specialistController@specialistdelete');
Route::post('/home/specialistdelete/{id}', 'App\Http\Controllers\specialistController@specialistdestroy');

Route::get('/home/specialistdetails/{id}', 'App\Http\Controllers\specialistController@specialistshow');


//Verified specialist curd------------------------------------------------------------------------------------------------

Route::get('/home/V_specialist', 'App\Http\Controllers\verifiedspecialistController@V_specialist');
Route::get('/home/V_specialist/search', 'App\Http\Controllers\verifiedspecialistController@V_specialist_search');

Route::get('/home/V_specialistcreate', 'App\Http\Controllers\verifiedspecialistController@V_specialistcreate');
Route::post('/home/V_specialistcreate', 'App\Http\Controllers\verifiedspecialistController@V_specialiststore');

Route::get('/home/V_specialistedit/{id}', 'App\Http\Controllers\verifiedspecialistController@V_specialistedit');//edittttt start
Route::post('/home/V_specialistedit/{id}', 'App\Http\Controllers\verifiedspecialistController@V_specialistupdate');

Route::get('/home/V_specialistdelete/{id}', 'App\Http\Controllers\verifiedspecialistController@V_specialistdelete');
Route::post('/home/V_specialistdelete/{id}', 'App\Http\Controllers\verifiedspecialistController@V_specialistdestroy');

Route::get('/home/V_specialistdetails/{id}', 'App\Http\Controllers\verifiedspecialistController@V_specialistshow');


// sellerlist curd------------------------------------------------------------------------------------------------

Route::get('/home/sellerlist', 'App\Http\Controllers\sellerlistController@sellerlist');
Route::get('/home/sellerlist/search', 'App\Http\Controllers\sellerlistController@sellerlist_search');

Route::get('/home/sellercreate', 'App\Http\Controllers\sellerlistController@sellercreate');
Route::post('/home/sellercreate', 'App\Http\Controllers\sellerlistController@sellerstore');

Route::get('/home/selleredit/{id}', 'App\Http\Controllers\sellerlistController@selleredit');//edittttt start
Route::post('/home/selleredit/{id}', 'App\Http\Controllers\sellerlistController@sellerupdate');

Route::get('/home/sellerdelete/{id}', 'App\Http\Controllers\sellerlistController@sellerdelete');
Route::post('/home/sellerdelete/{id}', 'App\Http\Controllers\sellerlistController@sellerdestroy');

Route::get('/home/sellerdetails/{id}', 'App\Http\Controllers\sellerlistController@sellershow');



//Verifed sellerlist curd------------------------------------------------------------------------------------------------

Route::get('/home/V_sellerlist', 'App\Http\Controllers\verifiedsellerlistController@V_sellerlist');
Route::get('/home/V_sellerlist/search', 'App\Http\Controllers\verifiedsellerlistController@V_sellerlist_search');

Route::get('/home/V_sellercreate', 'App\Http\Controllers\verifiedsellerlistController@V_sellercreate');
Route::post('/home/V_sellercreate', 'App\Http\Controllers\verifiedsellerlistController@V_sellerstore');

Route::get('/home/V_selleredit/{id}', 'App\Http\Controllers\verifiedsellerlistController@V_selleredit');//edittttt start
Route::post('/home/V_selleredit/{id}', 'App\Http\Controllers\verifiedsellerlistController@V_sellerupdate');

Route::get('/home/V_sellerdelete/{id}', 'App\Http\Controllers\verifiedsellerlistController@V_sellerdelete');
Route::post('/home/V_sellerdelete/{id}', 'App\Http\Controllers\verifiedsellerlistController@V_sellerdestroy');

Route::get('/home/V_sellerdetails/{id}', 'App\Http\Controllers\verifiedsellerlistController@V_sellershow');


// transiction curd------------------------------------------------------------------------------------------------

Route::get('/home/transictionlist', 'App\Http\Controllers\transictionController@transictionlist');
Route::get('/home/transictionlist/search', 'App\Http\Controllers\transictionController@transictionlist_search');
Route::get('/home/transictiondetails/{id}', 'App\Http\Controllers\transictionController@transictionshow');



// product---------------------------------



Route::get('/home/productlist', 'App\Http\Controllers\productController@productlist')->name('home.productlist');
Route::get('/home/productlist/search', 'App\Http\Controllers\productController@productlist_search');

Route::get('/home/productcreate', 'App\Http\Controllers\productController@productcreate')->middleware('sess')->name('home.productcreate');
Route::post('/home/productcreate', 'App\Http\Controllers\productController@productstore');

Route::get('/home/productedit/{id}', 'App\Http\Controllers\productController@productedit');//edittttt start
Route::post('/home/productedit/{id}', 'App\Http\Controllers\productController@productupdate');

Route::get('/home/productdelete/{id}', 'App\Http\Controllers\productController@productdelete');
Route::post('/home/productdelete/{id}', 'App\Http\Controllers\productController@productdestroy');

Route::get('/home/productdetails/{id}', 'App\Http\Controllers\productController@productshow');




// Admin post  ---------------------------------



Route::get('/home/adminpostlist', 'App\Http\Controllers\adminpostController@adminpostlist');
Route::get('/home/adminpostlist/search', 'App\Http\Controllers\adminpostController@adminpostlist_search');

Route::get('/home/adminpostcreate', 'App\Http\Controllers\adminpostController@adminpostcreate');
Route::post('/home/adminpostcreate', 'App\Http\Controllers\adminpostController@adminpoststore');

Route::get('/home/adminpostedit/{id}', 'App\Http\Controllers\adminpostController@adminpostedit');//edittttt start
Route::post('/home/adminpostedit/{id}', 'App\Http\Controllers\adminpostController@adminpostupdate');

Route::get('/home/adminpostdelete/{id}', 'App\Http\Controllers\adminpostController@adminpostdelete');
Route::post('/home/adminpostdelete/{id}', 'App\Http\Controllers\adminpostController@adminpostdestroy');

Route::get('/home/adminpostdetails/{id}', 'App\Http\Controllers\adminpostController@adminpostshow');




// Admin comment  ---------------------------------


Route::get('/home/admincommentlist', 'App\Http\Controllers\admincommentController@admincommentlist');

Route::get('/home/admincommentcreate/{id}', 'App\Http\Controllers\admincommentController@admincommentcreate');
Route::post('/home/admincommentcreate/{id}', 'App\Http\Controllers\admincommentController@admincommentstore');

Route::get('/home/admincommentedit/{id}', 'App\Http\Controllers\admincommentController@admincommentedit');//edittttt start
Route::post('/home/admincommentedit/{id}', 'App\Http\Controllers\admincommentController@admincommentupdate');

Route::get('/home/admincommentdelete/{id}', 'App\Http\Controllers\admincommentController@admincommentdelete');
Route::post('/home/admincommentdelete/{id}', 'App\Http\Controllers\admincommentController@admincommentdestroy');

Route::get('/home/admincommentdetails/{id}', 'App\Http\Controllers\admincommentController@admincommentshow');





// massage user  ---------------------------------



 Route::get('/home/user_message', 'App\Http\Controllers\massageuserController@adminuser_msglist');
 Route::get('/home/user_message/search', 'App\Http\Controllers\massageuserController@adminuser_msglist_search');


Route::get('/home/uuser_message', 'App\Http\Controllers\massageuserController@useradmin_msglist');////testtttt pupose


//Route::get('/home/adminuser_msgcreate', 'App\Http\Controllers\HomeController@adminuser_msgcreate');
Route::post('/home/user_message', 'App\Http\Controllers\massageuserController@adminuser_msgstore');


// massage specialist ---------------------------------



Route::get('/home/specialist_message', 'App\Http\Controllers\massagespecialistController@adminspecialist_msglist');
Route::get('/home/specialist_message/search', 'App\Http\Controllers\massagespecialistController@adminspecialist_msglist_search');

Route::post('/home/specialist_message', 'App\Http\Controllers\massagespecialistController@adminspecialist_msgstore');


// massage seller ---------------------------------



Route::get('/home/seller_message', 'App\Http\Controllers\massagesellerController@adminseller_msglist');
Route::get('/home/seller_message/search', 'App\Http\Controllers\massagesellerController@adminseller_msglist_search');

Route::post('/home/seller_message', 'App\Http\Controllers\massagesellerController@adminseller_msgstore');


// Additional feature ---------------------------------



Route::get('/home/chatbox', 'App\Http\Controllers\HomeController@chatbox');
Route::get('/home/photogallary', 'App\Http\Controllers\HomeController@photogallary');
Route::get('/home/videocall', 'App\Http\Controllers\HomeController@videocall');






});






