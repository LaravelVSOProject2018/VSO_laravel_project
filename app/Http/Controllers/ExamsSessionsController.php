<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;

class ExamsSessionsController extends Controller
{
    public function show($id)
    {
    	$exams = Exam::findOrFail($id);
        return view('examssessions.show',compact('exams'));

    }
}
