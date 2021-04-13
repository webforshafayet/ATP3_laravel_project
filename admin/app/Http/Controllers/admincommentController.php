<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;


use App\Models\commentpost;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;

class admincommentController extends Controller
{
    public function admincommentshow($id){

        $user =  commentpost::find($id);
        //print_r($user);
        return view('home.admincommentdetails')->with('user', $user);
    }




    public function admincommentcreate($id){
        $user =  commentpost::find($id);

        return view('home.admincommentcreate');
    }


        // public function productstore(UserRequest $req){
            public function admincommentstore($id,request $req){

                $validation = Validator::make($req->all(), [

                    'massage' => 'required'

                ]);

                if($validation->fails()){

                     return Back()->with('errors', $validation->errors())->withInput();
                   }

                $user =  commentpost::find($id);
            $user = new  commentpost();
            $user->massage = $req->massage;

            $user->save();


           return redirect('/home/adminpostlist');


    }


    public function admincommentedit($id){

      $user =  commentpost::find($id);
      return view('home.admincommentedit')->with('user', $user);


    }


    public function admincommentupdate($id, Request $req){

        $validation = Validator::make($req->all(), [

            'massage' => 'required'

        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }

        $user = commentpost::find($id);

            $user->massage = $req->massage;


        $user->save();

        return redirect('/home/adminpostlist');
    }
    public function admincommentlist(){



        $userlist =   commentpost::all();

        return view('home.admincommentlist')->with('list', $userlist);

    }




    public function admincommentdelete($id){

        $user =   commentpost::find($id);
        return view('home.admincommentdelete')->with('user', $user);
    }

    public function admincommentdestroy($id){

        if( commentpost::destroy($id)){
            return redirect('/home/admincommentlist');
        }else{
            return redirect('/home/admincommentdelete/'.$id);
        }

    }


}
