<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Program;
use App\Session;
use App\Http\Requests\CreateExamFormRequest;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams=Exam::all();
        return view('exams.index',compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program =['' => 'Select program'] + Program::pluck('name','id')->toArray();
        return view('exams.create', compact('program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        Exam::create([
           'name' => $request->name,
           'program_id' => $request->program,
           'description' => $request->description,

       ]);

         return redirect('exams')->with('message', 'Done!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exam = Exam::findOrFail($id);
        return view('exams.show',compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentProgram = Exam::find($id)->program_id;
        $programPluck= (Program::pluck('name','id'));
        $program = [$currentProgram => $programPluck[$currentProgram]] + Program::pluck('name','id')->toArray();
        $exam = Exam::findOrFail($id);
        return view('exams.edit')->with(compact('exam'))->with(compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exam = Exam::find($id);
        $exam->name = $request->get('name');
        $exam->program_id = $request->get('program');
        $exam->description = $request->get('description');
        $exam->save();
        return redirect('/exams')->with('message', 'Done!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam = Exam::find($id);
        $exam->delete();
        return redirect()->back()->with('message', 'Done!');
    }
}
