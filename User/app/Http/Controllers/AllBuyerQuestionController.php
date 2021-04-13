<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BuyerQuestion;

use Illuminate\Support\Facades\DB;

class AllBuyerQuestionController extends Controller
{
    public function allbuyerquestioncreate(){

        return view('All_Buyer_Question');
    }

    public function allbuyerquestionstore(Request $req){

        $user = new BuyerQuestion();
            $user->question   = $req->question;

            $user->save();



            return redirect('/home');
    }
}
