<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Department;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs=Program::all();
        return view('programs.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments =['' => 'Select department'] + Department::pluck('name','id')->toArray();
        return view('programs.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $type = Type::updateOrCreate(['kind' => $request->type]);
        // $id = $type->id;

       Program::create([
           'name' => $request->name,
           'description' => $request->description,
           'duration' => $request->duration,
           'quota' => $request->quota,
           'department_id' => $request->department,
       ]);

         return redirect('programs');
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
        $currentDepartment = Program::find($id)->department_id;
        $departmensPluck= (Department::pluck('name','id'));
        $departments = [$currentDepartment => $departmensPluck[$currentDepartment]] + Department::pluck('name','id')->toArray();
        $program = Program::findOrFail($id);
        return view('programs.edit')->with(compact('program'))->with(compact('departments'));
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
        
        $program = Program::find($id);
        $program->name = $request->get('name');
        $program->description = $request->get('description');
        $program->duration = $request->get('duration');
        $program->quota = $request->get('quota');
        $program->department_id = $request->get('department');
        $program->save();
        return redirect('/programs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();
        return redirect()->back();
    }
}
