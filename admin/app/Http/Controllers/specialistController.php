<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\specialist;
use Illuminate\Support\Facades\DB;
use Validator;

class specialistController extends Controller
{
    public function specialistshow($id){

        $user =specialist::find($id);

        return view('home.specialistdetails')->with('user', $user);
    }

    public function specialistcreate(){

        return view('home.specialistcreate');
    }

    public function specialiststore(Request $req){

        $validation = Validator::make($req->all(), [
            'username' => 'required|bail',
            'password' => 'required|min:6',
            'email' => 'required',
            'fullname' => 'required',
            'nationality'=>'required',
            'experience'=>'required',
            'education'=>'required'

        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }

        //insert into DB or model...

        $user = new specialist();
        $user->fullname     = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->education = $req->education;
        $user->experience = $req->experience;

        $user->nationality     = $req->nationality;


        $user->save();


       return redirect('/home/specialist');
       $userlist = $this->getUserlist();


    }


    public function specialistedit($id){

      $user = specialist::find($id);
      return view('home.specialistedit')->with('user', $user);

    }

    public function specialistupdate($id, Request $req){

        $validation = Validator::make($req->all(), [
            'username' => 'required|bail',
            'password' => 'required|min:6',
            'email' => 'required',
            'fullname' => 'required',
            'nationality'=>'required',
            'experience'=>'required',
            'education'=>'required'

        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }

        $user = specialist::find($id);

        $user->fullname = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;

        $user->nationality     = $req->nationality  ;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->education = $req->education;
        $user->experience = $req->experience;
        $user->save();

        return redirect('/home/specialist');
    }
    public function specialist(){



        $userlist = specialist::all();

        return view('home.specialist')->with('list', $userlist);

    }


    public function specialist_search(Request $req){

        $search=$req->input('search');
        $userlist=specialist::query()
        ->where('username','LIKE',"%{$search}%")
        ->orwhere('email','LIKE',"%{$search}%")
        ->orwhere('fullname','LIKE',"%{$search}%")
        ->get();

        return view('home.specialist')->with('list', $userlist);
    }




    public function specialistdelete($id){

        $user = specialist::find($id);
        return view('home.specialistdelete')->with('user', $user);
    }

    public function specialistdestroy($id){

        if(specialist::destroy($id)){
            return redirect('/home/specialist');
        }else{
            return redirect('/home/specialistdelete/'.$id);
        }

    }

}
