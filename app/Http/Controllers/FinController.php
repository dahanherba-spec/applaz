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

    public function upload(){
	    return view('upload'); 
    }    

    public function uploaddata(Request $request){
    	// insert data ke table tfundraiser
	    DB::table('tfundraiser')->insert([
			'dondate' => $request->dondate,
		    'donname' => $request->donname,
		    'donamount' => $request->donamount,
		    'dontype' => $request->dontype,
		    'dontrx' => $request->dontrx,
		    'donphone' => $request->donphone,
			'donemail' => $request->donemail,
			'donarea' => $request->donarea,
			'fundid' => $request->fundid,
			'fundname' => $request->fundname,
			'fundstat' => $request->fundstat		
	    ]);
	    // alihkan halaman ke halaman fund
	    return redirect('/fin');
    }        
}
