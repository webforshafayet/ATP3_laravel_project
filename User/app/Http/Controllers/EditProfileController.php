<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Buyerprofile;

use Illuminate\Support\Facades\DB;

class EditProfileController extends Controller
{
    public function editprofilecreate(){

        $userlist = Buyerprofile::all();
        return view('Edit_Profile')->with('list', $userlist);
    }

    public function editprofilestore(Request $req){

        $user = new Buyerprofile();
            $user->username = $req->username;
            $user->password = $req->password;
            $user->email = $req->email;
            $user->fullname   = $req->fullname;
            $user->address   = $req->address;
            $user->nationality     = $req->nationality;
          

            $user->save();



            return redirect('/home');
    }
}
