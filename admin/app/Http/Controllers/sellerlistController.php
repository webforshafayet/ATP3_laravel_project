<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Guesser\Name;


use App\Models\sellerlist;

use Illuminate\Support\Facades\DB;
use Validator;

class sellerlistController extends Controller
{
    public function sellershow($id){

        $user =sellerlist::find($id);

        return view('home.sellerdetails')->with('user', $user);
    }

    public function sellercreate(){

        return view('home.sellercreate');
    }

    public function sellerstore(Request $req){


        $validation = Validator::make($req->all(), [
            'username' => 'required|bail',
            'password' => 'required|min:6',
            'email' => 'required',
            'fullname' => 'required',
            'nationality'=>'required',
            'address'=>'required'

        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }

        //insert into DB or model...

        $user = new sellerlist();
        $user->fullname     = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
        $user->address = $req->address;

        $user->nationality     = $req->nationality;


        $user->save();


       return redirect('/home/sellerlist');
       $userlist = $this->getUserlist();


    }


    public function selleredit($id){

      $user = sellerlist::find($id);
      return view('home.selleredit')->with('user', $user);

    }

    public function sellerupdate($id, Request $req){
        $validation = Validator::make($req->all(), [
            'username' => 'required|bail',
            'password' => 'required|min:6',
            'email' => 'required',
            'fullname' => 'required',
            'nationality'=>'required',
            'address'=>'required'

        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }

        $user = sellerlist::find($id);

        $user->fullname = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;

        $user->nationality     = $req->nationality  ;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->save();

        return redirect('/home/sellerlist');
    }

    public function sellerlist(){

        $userlist = sellerlist::all();

        return view('home.sellerlist')->with('list', $userlist);

    }

    public function sellerlist_search(Request $req){

        $search=$req->input('search');
        $userlist=sellerlist::query()
        ->where('username','LIKE',"%{$search}%")
        ->orwhere('email','LIKE',"%{$search}%")
        ->orwhere('fullname','LIKE',"%{$search}%")
        ->get();

        return view('home.sellerlist')->with('list', $userlist);
    }




    public function sellerdelete($id){

        $user = sellerlist::find($id);
        return view('home.sellerdelete')->with('user', $user);
    }

    public function sellerdestroy($id){

        if(sellerlist::destroy($id)){
            return redirect('/home/sellerlist');
        }else{
            return redirect('/home/sellerdelete/'.$id);
        }

    }
}
