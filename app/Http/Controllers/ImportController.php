<?php

use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Http\Request;
use App\Models\YourModel;

class ImportController extends Controller
{
    public function importExcel(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xls,xlsx|max:10000',
        ]);

        $users = (new FastExcel())->import($request->file('excel_file'), function ($line) {
            // Map the data to your database columns here
            return YourModel::create([
                'name' => $line['Name'], // Assumes your header row has 'Name'
                'email' => $line['Email'],
                'password' => $line['Password'],
                // ...
            ]);
        });

        return back()->with('success', 'Excel file imported successfully.');
    }
}
