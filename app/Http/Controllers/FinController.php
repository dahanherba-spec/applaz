<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;

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
	    // alihkan halaman ke halaman fin
	    return redirect('/fin');
    }        

	// Validate uploaded file, import data from Excel, create new data in the database
    public function import(Request $request)
    {
        $request->validate([
            'file' => ['required', 'file', 'mimes:xlsx,csv,ods']
        ]);
        (new FastExcel)->import($request->file('file'), function ($row) {
	    	DB::table('tfundraiser')->insert([
				'dondate' => $row['dondate'],
		    	'donname' => $row['donname'],
		    	'donamount' => $row['donamount'],
		    	'dontype' => $row['dontype'],
		    	'dontrx' => $row['dontrx'],
		    	'donphone' => $row['donphone'],
				'donemail' => $row['donemail'],
				'donarea' => $row['donarea'],
				'fundid' => $row['fundid'],
				'fundname' => $row['fundname'],
				'fundstat' => $row['fundstat']		
	    	]);
        });
        // Redirect back with success message
        return redirect('/fin');
    }	

    // Export data to Excel, selecting relevant columns and preparing a downloadable file
    public function export()
    {
		$fund = DB::table('tfundraiser')->select('dondate','donname','donamount','dontype','dontrx','donphone','donemail','donarea','fundid','fundname','fundstat')->get();
        return (new FastExcel($fund))->download('donasi.xlsx');
    }

}
