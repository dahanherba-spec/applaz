<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FundController extends Controller{

    public function index(){
    	$fund = DB::table('tfundraiser')->get();
    	return view('index',['fund' => $fund]);         
    }

    public function tambah(){
	    return view('tambah'); 
    }    

    public function store(Request $request){
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
	    return redirect('/fund');
    }    

	public function edit($id){
		$fund = DB::table('tfundraiser')->where('trxid',$id)->get();
		// passing data fundraiser yang didapat ke view edit.blade.php
		return view('edit',['fund' => $fund]); 
	}
 
	// update data fundraiser
	public function update(Request $request){
		DB::table('tfundraiser')->where('trxid',$request->trxid)->update([
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
		return redirect('/fund');
	}
 
	public function hapus($id){
		DB::table('tfundraiser')->where('fundid',$id)->delete();		
		return redirect('/fund');
	}

	public function verifikasi($id){
		$veri = DB::table('tfundraiser')->where('trxid',$id)->get();
		// passing data fundraiser yang didapat ke view edit.blade.php
		return view('verifikasi',['veri' => $veri]); 
	}
 
	public function verified(Request $request){
		DB::table('tfundraiser')->where('trxid',$request->trxid)->update([
			'fundstat' => $request->fundstat	
		]);
		// alihkan halaman ke halaman fund
		return redirect('/fin');
	}	

}
