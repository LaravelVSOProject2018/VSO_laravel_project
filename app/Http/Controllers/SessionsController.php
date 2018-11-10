<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Exam;
use App\Session;

class SessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions=Session::all();
        return view('sessions.index',compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exam =['' => 'Select exam'] + Exam::pluck('name','id')->toArray();
        return view('sessions.create', compact('exam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::create([
        'name' => $request->name,
        'exam_id' => $request->exam,
        'duration' => $request->duration,
        'start_datetime' => $request->start_datetime,
       ]);

         return redirect('sessions')->with('message', 'Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currentSession = Session::find($id)->exam_id;
        
        $examPluck= (Exam::pluck('name','id'));
        $exam = [$currentSession => $examPluck[$currentSession]] + Exam::pluck('name','id')->toArray();
        $session = Session::findOrFail($id);
        return view('sessions.edit')->with(compact('session'))->with(compact('exam'));
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
        $session = Session::find($id);
        $session->name = $request->get('name');
        $session->exam_id = $request->get('exam');
        $session->duration = $request->get('duration');
        $session->start_datetime = $request->get('start_datetime');
        $session->save();
        return redirect('sessions')->with('message', 'Done!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $session = Session::find($id);
        $session->delete();
        return redirect()->back()->with('message', 'Done!');
    }
}
