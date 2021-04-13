<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Report;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function reportcreate(){

        return view('Report');
    }

    public function reportstore(Request $req){

        $user = new Report();
            $user->report   = $req->report;
            $user->save();
            return redirect('/home');
    }
}
