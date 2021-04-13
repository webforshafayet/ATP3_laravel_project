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

class massagesellerController extends Controller
{
    public function adminseller_msgstore(request $req){


        $validation = Validator::make($req->all(), [

            'massage'=>'required'

        ]);

        if($validation->fails()){

             return Back()->with('errors', $validation->errors())->withInput();
           }


        $user = new adminseller_msg();
        $user->massage  = $req->massage;


        $user->save();

        return redirect('/home/seller_message');


}

public function adminseller_msglist(){



$userlis=DB::table('tosellermassage')


->join('sellermassage', 'sellermassage.id','tosellermassage.id')
->select('tosellermassage.massage','sellermassage.massage')
->get();



$userlis = json_encode($userlis, true);




echo"<h1>Seller Massage</h1>";


        echo "<table>";
        echo "<tr>";
        echo "<td>";

       // echo "<pre>";
       Print_r($userlis)."<br>";

        echo "</td>";
        echo "</tr>";
        echo "<table>";






// return $userlist;
$userlist =   adminseller_msg::all();
 return view('home.adminseller_msglist')->with('list', $userlist);




}

public function adminseller_msglist_search(Request $req){

$search=$req->input('search');
$userlist=adminseller_msg::query()
->where('massage','LIKE',"%{$search}%")

->get();

return view('home.adminseller_msglist')->with('list', $userlist);
}


}
