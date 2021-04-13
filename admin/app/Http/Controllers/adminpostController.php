<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Guesser\Name;


use App\Models\Adminpost;

use Illuminate\Support\Facades\DB;
use Validator;

class adminpostController extends Controller
{

    public function adminpostshow($id){

        $userlis=DB::table('commentpost')


        ->join('adminpost', 'commentpost.id',"=",'adminpost.userid')
        ->select('commentpost.massage')
        ->where('commentpost.id',$id)
        ->get();


       // $userlis = json_decode($userlis, true);

        $userlis = json_encode($userlis, true);





        echo"<h1>post Comment</h1>";


                echo "<table>";
                echo "<tr>";
                echo "<td>";

               // echo "<pre>";
               Print_r($userlis)."<br>";

                echo "</td>";
                echo "</tr>";
                echo "<table>";



        $user = Adminpost::find($id);
        //print_r($user);
        return view('home.adminpostdetails')->with('user', $user);

    }




    public function adminpostcreate(){



        return view('home.adminpostcreate');
    }


        // public function productstore(UserRequest $req){
            public function adminpoststore(request $req){


                $validation = Validator::make($req->all(), [


                    'post' => 'required',
                    'myfile' => 'required'

                ]);

                if($validation->fails()){

                     return Back()->with('errors', $validation->errors())->withInput();
                   }



        if($req->hasFile('myfile')){
            $file = $req->file('myfile');

            $filename = time().".".$file->getClientOriginalExtension();
            $file->move('upload', $filename);

            $user = new  Adminpost();
            $user->post = $req->post;

            $user->image     = $file->getClientOriginalName();

            $user->save();


           return redirect('/home/adminpostlist');
        }



    }


    public function adminpostedit($id){

        $userlis=DB::table('commentpost')


        ->join('adminpost', 'commentpost.id',"=",'adminpost.userid')
        ->select('commentpost.massage')
        ->where('commentpost.id',$id)
        ->get();


       // $userlis = json_decode($userlis, true);

        $userlis = json_encode($userlis, true);





        echo"<h1>post Comment</h1>";


                echo "<table>";
                echo "<tr>";
                echo "<td>";

               // echo "<pre>";
               Print_r($userlis)."<br>";

                echo "</td>";
                echo "</tr>";
                echo "<table>";

      $user = Adminpost::find($id);
      return view('home.adminpostedit')->with('user', $user);


    }





    public function adminpostupdate($id, Request $req){

        $validation = Validator::make($req->all(), [
            'post' => 'required',
            'myfile'=>'required'

        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }


        $user =  Adminpost::find($id);

        $file = $req->file('myfile');

            $filename = time().".".$file->getClientOriginalExtension();
            $file->move('upload', $filename);
            $user->post = $req->post;

            $user->image     = $file->getClientOriginalName();


        $user->save();

        return redirect('/home/adminpostlist');
    }
    public function adminpostlist(){



        $userlist =  Adminpost::all();

        return view('home.adminpostlist')->with('list', $userlist);

    }


    public function adminpostlist_search(Request $req){

        $search=$req->input('search');
        $userlist=Adminpost::query()
        ->where('post','LIKE',"%{$search}%")

        ->get();

        return view('home.adminpostlist')->with('list', $userlist);
    }




    public function adminpostdelete($id){

        $user =  Adminpost::find($id);
        return view('home.adminpostdelete')->with('user', $user);
    }

    public function adminpostdestroy($id){

        if( Adminpost::destroy($id)){
            return redirect('/home/adminpostlist');
        }else{
            return redirect('/home/adminpostdelete/'.$id);
        }

    }

}
