<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Payment;

use Illuminate\Support\Facades\DB;

class MakePaymentController extends Controller
{
    public function makepaymentcreate(){

        
        $userlist = Payment::all();

        return view('Make_Payment')->with('list', $userlist);
    }

    public function makepaymentstore(Request $req){

        $user = new Payment();
           
            $user->id = $req->id;
            $user->price = $req->price;
           // $user->dept     = $req->dept;
            //$user->nationality     = $req->nationality;
          // $user->profile_img     = '';

            $user->save();



            return redirect('/home');
    }
}
