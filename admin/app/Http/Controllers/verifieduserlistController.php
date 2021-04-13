<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verified_user;
use Illuminate\Support\Facades\DB;
use Validator;

class verifieduserlistController extends Controller
{
    public function V_usershow($id){

        $user = Verified_user::find($id);

        return view('home.V_userdetails')->with('user', $user);
    }

    public function V_usercreate(){

        return view('home.V_usercreate');
    }

    public function V_userstore(Request $req){


        $validation = Validator::make($req->all(), [
            'username' => 'required|unique:userlist|bail',
            'password' => 'required|min:6',
            'email' => 'required',
            'fullname' => 'required',
            'nid' => 'required',
            'nationality'=>'required'
        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }


        //insert into DB or model...

        $user = new Verified_user();
        $user->fullname     = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;

        $user->nationality     = $req->nationality;
        $user->nid     = $req->nid;


        $user->save();


       return redirect('/home/V_userlist');
       $userlist = $this->getUserlist();


    }


    public function V_useredit($id){

      $user = Verified_user::find($id);
      return view('home.V_useredit')->with('user', $user);
    }

    public function V_userupdate($id, Request $req){

        $validation = Validator::make($req->all(), [
            'username' => 'required|bail',
            'password' => 'required|min:6',
            'email' => 'required',
            'fullname' => 'required',
            'nid' => 'required',
            'nationality'=>'required'
        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }

        $user = Verified_user::find($id);

        $user->fullname = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->nid     = $req->nid;
        $user->email = $req->email;

        $user->nationality     = $req->nationality  ;
        $user->save();

        return redirect('/home/V_userlist');
    }
    public function V_userlist(){



        $userlist = Verified_user::all();

        return view('home.V_userlist')->with('list', $userlist);

    }

    public function V_userlist_search(Request $req){

        $search=$req->input('search');
        $userlist=Verified_user::query()
        ->where('username','LIKE',"%{$search}%")
        ->orwhere('email','LIKE',"%{$search}%")
        ->orwhere('fullname','LIKE',"%{$search}%")
        ->get();

        return view('home.V_userlist')->with('list', $userlist);
    }



    public function V_userdelete($id){

        $user = Verified_user::find($id);
        return view('home.V_userdelete')->with('user', $user);
    }

    public function V_userdestroy($id){

        if(Verified_user::destroy($id)){
            return redirect('/home/V_userlist');
        }else{
            return redirect('/home/V_userdelete/'.$id);
        }

    }

}
