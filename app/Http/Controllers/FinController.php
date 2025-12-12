<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinController extends Controller
{
    public function index(){
       	$fund = DB::table('tfundraiser')->get();
 
    	return view('fin',['fin' => $fund]);
    }
}
