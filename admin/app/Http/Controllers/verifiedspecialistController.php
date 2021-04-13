<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Verified_specialist;

use Illuminate\Support\Facades\DB;
use Validator;

class verifiedspecialistController extends Controller
{
    public function V_specialistshow($id){

        $user =Verified_specialist::find($id);

        return view('home.V_specialistdetails')->with('user', $user);
    }

    public function V_specialistcreate(){

        return view('home.V_specialistcreate');
    }

    public function V_specialiststore(Request $req){


        $validation = Validator::make($req->all(), [
            'username' => 'required|bail',
            'password' => 'required|min:6',
            'email' => 'required',
            'fullname' => 'required',
            'nationality'=>'required',
            'experience'=>'required',
            'education'=>'required',
            'nid'=>'required'
        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }

        //insert into DB or model...

        $user = new Verified_specialist();
        $user->fullname     = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->education = $req->education;
        $user->experience = $req->experience;
        $user->nid = $req->nid;

        $user->nationality     = $req->nationality;


        $user->save();


       return redirect('/home/V_specialist');
       $userlist = $this->getUserlist();


    }


    public function V_specialistedit($id){

      $user = Verified_specialist::find($id);
      return view('home.V_specialistedit')->with('user', $user);

    }

    public function V_specialistupdate($id, Request $req){


        $validation = Validator::make($req->all(), [
            'username' => 'required|bail',
            'password' => 'required|min:6',
            'email' => 'required',
            'fullname' => 'required',
            'nationality'=>'required',
            'experience'=>'required',
            'education'=>'required',
            'nid'=>'required'
        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }

        $user = Verified_specialist::find($id);

        $user->fullname = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;

        $user->nationality     = $req->nationality  ;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->education = $req->education;
        $user->experience = $req->experience;
        $user->nid = $req->nid;
        $user->save();

        return redirect('/home/V_specialist');
    }
    public function V_specialist(){



        $userlist = Verified_specialist::all();

        return view('home.V_specialist')->with('list', $userlist);

    }

    public function V_specialist_search(Request $req){

        $search=$req->input('search');
        $userlist=Verified_specialist::query()
        ->where('username','LIKE',"%{$search}%")
        ->orwhere('email','LIKE',"%{$search}%")
        ->orwhere('fullname','LIKE',"%{$search}%")
        ->get();

        return view('home.specialist')->with('list', $userlist);
    }




    public function V_specialistdelete($id){

        $user = Verified_specialist::find($id);
        return view('home.V_specialistdelete')->with('user', $user);
    }

    public function V_specialistdestroy($id){

        if(Verified_specialist::destroy($id)){
            return redirect('/home/V_specialist');
        }else{
            return redirect('/home/V_specialistdelete/'.$id);
        }

    }
}
