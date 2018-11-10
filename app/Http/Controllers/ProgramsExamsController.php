<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Exam;

class ProgramsExamsController extends Controller
{
    public function show($id)
    {
    	$program = Program::findOrFail($id);
        return view('programsexams.show',compact('program'));
    }
    
}
