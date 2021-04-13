<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;

use Illuminate\Support\Facades\DB;

class EditCommentController extends Controller
{
    public function editcommentcreate(){

        return view('Edit_Comment');
    }

    public function editcommentstore(Request $req){

        $user = new Comment();
        $user->id = $req->id;
            $user->comment   = $req->comment;
            
           // $user->dept     = $req->dept;
            //$user->nationality     = $req->nationality;
          // $user->profile_img     = '';

            $user->save();



            return redirect('/home');
    }
}
