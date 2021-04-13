<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Userlist;
use App\Models\Verified_user;
use App\Models\sellerlist;
use App\Models\Verified_seller;
use App\Models\specialist;
use App\Models\Verified_specialist;
use App\Models\transictiontable;
use App\Models\Product;
use App\Models\Adminpost;
use App\Models\adminuser_msg;
use App\Models\useradmin_msg;
use App\Models\adminspecialist_msg;
use App\Models\adminseller_msg;
use App\Models\commentpost;
use Illuminate\Support\Facades\DB;
use Validator;

use PhpParser\Node\Expr\Print_;

class HomeController extends Controller
{
    public function index(Request $req){
          // return view('home.index');

       // return view('home.index', ['name'=> 'xyz', 'id'=>12]);


// alternative---------------------------------------------




        // return view('home.index')
        //       ->with('name', 'alamin')
        //       ->with('id', '12');
// alternative---------------------------------------------
        $name="shafayet";
        $id="12";
        //  return view('home.index')
        //          ->withName($name)
        //          ->withId($id);
// alternative---------------------------------------------
        //return view('home.index', compact('id', 'name'));

        if($req->session()->has('username')){                   // page sequre unauthorized access
            return view('home.index', compact('id', 'name'));
        }else{
            $req->session()->flash('msg', 'invalid request...login first!');
            return redirect('/login');
        }




    }









  //Verified userlist--------------------------------------------------------------------------------------------



    // userlist--------------------------------------------------------------------------------------------



     // verified specialist--------------------------------------------------------------------------------------------




     // specialist--------------------------------------------------------------------------------------------



     //Verified sellerlist--------------------------------------------------------------------------------------------


     // sellerlist--------------------------------------------------------------------------------------------




//transictionlist--------------------------------------------------------------------------------------






    //product-----------------------------------------------------








    //Admin post-----------------------------------------------------











    //////Admin comment---------------------------------------------------------

























    // messssssssssssssssssageeeeeeeeeeeeeeeeeee
    // messssssssssssssssssageeeeeeeeeeeeeeeeeee
    // messssssssssssssssssageeeeeeeeeeeeeeeeeee

    //Admin user msg-----------------------------------------------------







     //Admin specialist msg-----------------------------------------------------





        // public function productstore(UserRequest $req){


        //Admin seller msg-----------------------------------------------------





        // public function productstore(UserRequest $req){


    /////-------------------------------------------------------------

    //Additional feature

    public function  chatbox(){


        return view('home.chatbox');
    }

    public function  photogallary(){
        return view('home.photogallary');
    }

    public function  videocall(){
        return view('home.videocall');
    }

}


