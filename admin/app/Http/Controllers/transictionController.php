<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Faker\Guesser\Name;
use App\Models\transictiontable;

use Illuminate\Support\Facades\DB;
use Validator;


class transictionController extends Controller
{
    public function transictionlist(){

        $userlist = transictiontable::all();

        return view('home.transictionlist')->with('list', $userlist);

    }
    public function transictionlist_search(Request $req){

        $search=$req->input('search');
        $userlist=transictiontable::query()
        ->where('productname','LIKE',"%{$search}%")
        ->orwhere('buyername','LIKE',"%{$search}%")
        ->orwhere('sellername','LIKE',"%{$search}%")
        ->get();

        return view('home.transictionlist')->with('list', $userlist);
    }

    public function transictionshow($id){

        $user =transictiontable::find($id);

        return view('home.transictiondetails')->with('user', $user);
    }
}
