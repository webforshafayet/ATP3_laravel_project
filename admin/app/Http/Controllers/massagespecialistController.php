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

class massagespecialistController extends Controller
{
    public function adminspecialist_msgstore(request $req){


        $validation = Validator::make($req->all(), [

            'massage'=>'required'

        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }



        $user = new adminspecialist_msg();
        $user->massage  = $req->massage;


        $user->save();

        return redirect('/home/specialist_message');


}

public function adminspecialist_msglist(){



$userlis=DB::table('tospecialistmassage')


->join('specialistmassage', 'specialistmassage.id','tospecialistmassage.id')
->select('tospecialistmassage.massage','specialistmassage.massage')
->get();

// $userlis = json_decode($userlis, true);

$userlis = json_encode($userlis, true);




echo"<h1>Specialist Massage</h1>";


        echo "<table>";
        echo "<tr>";
        echo "<td>";

       // echo "<pre>";
       Print_r($userlis)."<br>";

        echo "</td>";
        echo "</tr>";
        echo "<table>";






// return $userlist;
$userlist =   adminspecialist_msg::all();
 return view('home.adminspecialist_msglist')->with('list', $userlist);




}


public function adminspecialist_msglist_search(Request $req){

$search=$req->input('search');
$userlist=adminspecialist_msg::query()
->where('massage','LIKE',"%{$search}%")

->get();

return view('home.adminspecialist_msglist')->with('list', $userlist);
}


}
