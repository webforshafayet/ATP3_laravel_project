<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(Request $req){

        /* $user = User::where('password', $req->password)
                    ->where('username', $req->username)
                    ->get(); */
        //echo count($user);

        $user = DB::table('customers')
                    ->where('password', $req->password)
                    ->where('username', $req->username)
                    ->get();


        if($req->username == "" || $req->password == ""){
           $req->session()->flash('msg', 'null username or password...');
           return redirect('/login');

        }elseif(count($user) > 0 ){
            

            $req->session()->put('username', $req->username);
            return redirect('/home');
        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }
}
