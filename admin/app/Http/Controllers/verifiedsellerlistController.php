<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Models\Verified_seller;
use Illuminate\Support\Facades\DB;
use Validator;

class verifiedsellerlistController extends Controller
{
    public function V_sellershow($id){

        $user =Verified_seller::find($id);

        return view('home.V_sellerdetails')->with('user', $user);
    }

    public function V_sellercreate(){

        return view('home.V_sellercreate');
    }

    public function V_sellerstore(Request $req){


        //insert into DB or model...

        $user = new Verified_seller();
        $user->fullname     = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->nid = $req->nid;

        $user->nationality     = $req->nationality;


        $user->save();


       return redirect('/home/V_sellerlist');
       $userlist = $this->getUserlist();


    }


    public function V_selleredit($id){

      $user = Verified_seller::find($id);
      return view('home.V_selleredit')->with('user', $user);

    }

    public function V_sellerupdate($id, Request $req){


        $validation = Validator::make($req->all(), [
            'username' => 'required|bail',
            'password' => 'required|min:6',
            'email' => 'required',
            'fullname' => 'required',
            'nationality'=>'required',
            'address'=>'required',
            'nid'=>'required'
        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }

        $user = Verified_seller::find($id);

        $user->fullname = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;

        $user->nationality     = $req->nationality  ;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->nid = $req->nid;
        $user->save();

        return redirect('/home/V_sellerlist');
    }
    public function V_sellerlist(){



        $userlist = Verified_seller::all();

        return view('home.V_sellerlist')->with('list', $userlist);

    }
    public function V_sellerlist_search(Request $req){

        $validation = Validator::make($req->all(), [
            'username' => 'required|bail',
            'password' => 'required|min:6',
            'email' => 'required',
            'fullname' => 'required',
            'nationality'=>'required',
            'address'=>'required',
            'nid'=>'required'
        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }


        $search=$req->input('search');
        $userlist=Verified_seller::query()
        ->where('username','LIKE',"%{$search}%")
        ->orwhere('email','LIKE',"%{$search}%")
        ->orwhere('fullname','LIKE',"%{$search}%")
        ->get();

        return view('home.V_sellerlist')->with('list', $userlist);
    }




    public function V_sellerdelete($id){

        $user = Verified_seller::find($id);
        return view('home.V_sellerdelete')->with('user', $user);
    }

    public function V_sellerdestroy($id){

        if(Verified_seller::destroy($id)){
            return redirect('/home/V_sellerlist');
        }else{
            return redirect('/home/V_sellerdelete/'.$id);
        }

    }

}
