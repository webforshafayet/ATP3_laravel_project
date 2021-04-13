<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Faker\Guesser\Name;

use App\Models\adminuser_msg;
use App\Models\useradmin_msg;
use App\Models\adminspecialist_msg;
use App\Models\adminseller_msg;
use App\Models\commentpost;
use Illuminate\Support\Facades\DB;
use Validator;

class massageuserController extends Controller
{
    public function useradmin_msglist(){



        $userlist = useradmin_msg::all();

        return view('home.user_msglist')->with('list', $userlist);


    }





        // public function productstore(UserRequest $req){
            public function adminuser_msgstore(request $req){


                $validation = Validator::make($req->all(), [

                    'massage'=>'required'

                ]);

                if($validation->fails()){

                     return Back()->with('errors', $validation->errors())->withInput();
                   }



                $user = new adminuser_msg();
                $user->massage     = $req->massage;


                $user->save();

                return redirect('/home/user_message');


    }

    public function adminuser_msglist(){



        // $userlist =  adminuser_msg::all();


        $userlis=DB::table('tousermassage')


        ->join('usermassage', 'usermassage.userid','tousermassage.userid')
        ->select('tousermassage.massage','usermassage.massage')
        ->get();

       // $userlis = json_decode($userlis, true);

        $userlis = json_encode($userlis, true);




        echo"<h1>User Massage</h1>";


                echo "<table>";
                echo "<tr>";
                echo "<td>";

               // echo "<pre>";
               Print_r($userlis)."<br>";

                echo "</td>";
                echo "</tr>";
                echo "<table>";



        //return($userlis);





        // return view('home.user_msglist',compact('$userlis'));


       // return $userlist;
 $userlist =  adminuser_msg::all();
         return view('home.adminuser_msglist')->with('list', $userlist);

        //  $userlist =adminuser_msg::table('tousermassage')->get();



    }


    public function adminuser_msglist_search(Request $req){

        $search=$req->input('search');
        $userlist=adminuser_msg::query()
        ->where('massage','LIKE',"%{$search}%")

        ->get();

        return view('home.adminuser_msglist')->with('list', $userlist);
    }

}
