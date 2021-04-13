<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Buyproduct;

use Illuminate\Support\Facades\DB;

class BuyProductController extends Controller
{
    public function buyproductcreate(){

        
        $userlist = Buyproduct::all();

        return view('Buy_Product')->with('list', $userlist);
    }

    public function buyproductstore(Request $req){

        $user = new Buyproduct();
            $user->name   = $req->name;
            $user->id = $req->id;
            $user->price = $req->price;
           // $user->dept     = $req->dept;
            //$user->nationality     = $req->nationality;
          // $user->profile_img     = '';

            $user->save();



            return redirect('/home');
    }
}
