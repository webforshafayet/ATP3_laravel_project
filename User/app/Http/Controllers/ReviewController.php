<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Review;

use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function reviewcreate(){

        return view('Review');
    }

    public function reviewstore(Request $req){

        $user = new Review();
            $user->review   = $req->review;
            
           // $user->dept     = $req->dept;
            //$user->nationality     = $req->nationality;
          // $user->profile_img     = '';

            $user->save();



            return redirect('/home');
    }
}
