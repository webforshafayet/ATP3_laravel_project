<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\DB;

class AddInfoController extends Controller
{
    public function addinfocreate(){

        return view('Add_Info');
    }

    public function addinfostore(Request $req){

        $user = new User();
            $user->name   = $req->name;
            $user->username = $req->username;
            $user->password = $req->password;
            $user->email = $req->email;
            $user->country = $req->country;
            $user->city = $req->city;
           // $user->dept     = $req->dept;
            //$user->nationality     = $req->nationality;
          // $user->profile_img     = '';

            $user->save();



            return redirect('/home');
    }
}
