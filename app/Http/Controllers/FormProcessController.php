<?php

namespace App\Http\Controllers;

use App\Models\StudentResult;
use Illuminate\Http\Request;

class FormProcessController extends Controller
{
    // function show_result(Request $req){

    //     // echo "Here is Your result";

    //     // $cnic= $req->cnic;

    //     // echo $cnic;
    //     // die;
    
        
    // }


    public function show_result(Request $req) {
        $req->validate([
            'cnic' => 'required|digits_between:1,20',
        ]);
    
        $result = StudentResult::where('cnic', $req->cnic)->first();
    
        if ($result) {
            return view('student_result', compact('result'));
        } else {
            return back()->withErrors(['error' => 'No results found for this CNIC'])->withInput();
        }
    }
    


    public function addresult(Request $req) {

        $req->validate([
            'rollno' => 'required|integer',
            'cnic' => 'required|integer',
            'name' => 'required|string',
            'obmarks' => 'required|integer',
            'tmarks' => 'required|integer'
        ]);

        $work = new StudentResult();
    
        $work->rollno = $req->rollno;
        $work->cnic = $req->cnic;
        $work->name = $req->name;  // Use lowercase 'n' in 'name'
        $work->obmarks = $req->obmarks;
        $work->tmarks = $req->tmarks;
    
        if($work->save()) {
            return "Result Added";
        } else {
            return "Result Not Added";
        }
    }

    public function showSearchForm() {
        return view('admin_dashboard.search_form'); // Create a 'search_form' view for entering CNIC
    }

        // This method retrieves the student’s details by CNIC and displays an edit form.
    public function searchByCnic(Request $req) {
        $req->validate([
        'cnic' => 'required|digits_between:1,20',
    ]);

        $result = StudentResult::where('cnic', $req->cnic)->first();

        if ($result) {
        return view('admin_dashboard.edit_result', compact('result')); // Create an 'edit_result' view for editing the record
        } else {
        return back()->withErrors(['error' => 'No results found for this CNIC'])->withInput();
    }
}

// This method will handle the form submission to update the student’s record.
public function updateResult(Request $req) {
    $req->validate([
        'rollno' => 'required|integer',
        'cnic' => 'required|digits_between:1,20',
        'name' => 'required|string|max:255',
        'obmarks' => 'required|integer',
        'tmarks' => 'required|integer',
    ]);

    $result = StudentResult::where('rollno', $req->rollno)->first();

    if ($result) {
        $result->rollno = $req->rollno;
        $result->cnic = $req->cnic;
        $result->name = $req->name;
        $result->obmarks = $req->obmarks;
        $result->tmarks = $req->tmarks;
        $result->save();

        return redirect()->route('show.search.form')->with('success', 'Result updated successfully');
    } else {
        return back()->withErrors(['error' => 'Failed to update record']);
    }
}
    
}
