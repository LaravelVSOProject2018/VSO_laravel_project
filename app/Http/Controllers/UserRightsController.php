<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Profile;

class UserRightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_r=User::all();
        return view('userrights.index',compact('users_r'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        $currentUser = User::find($id)->role_id;
        $rolesPluck= (Role::pluck('role','id'));
        $approvals = ['0'=> 'NotApproved'] + ['1'=> 'Approved'];
        $roles = [$currentUser => $rolesPluck[$currentUser]] + Role::pluck('role','id')->toArray();
        $user_r = User::findOrFail($id);
        return view('userrights.edit')->with(compact('user_r'))->with(compact('roles'))->with(compact('approvals'));
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
        $user_r = User::find($id);
        $user_r->name = $request->get('name');
        $user_r->email = $request->get('email');
        $user_r->approved = $request->get('approved');
        $user_r->role_id = $request->get('role');

        $user_r->save();
        return redirect('userrights')->with('message', 'Done!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users_r = User::find($id);
        $users_r->delete();
        return redirect()->back()->with('message', 'Done!');
    }
}
