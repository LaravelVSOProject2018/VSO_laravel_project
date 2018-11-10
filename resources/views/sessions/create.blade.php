@extends('layouts.admin_edit_master')

@section('content')

<div class='col-md-6 col-md-offset-3'>
  <h2>Add new session panel</h2>
<hr>
  
{!! Form::open(['action' => 'SessionsController@store','files' => true]) !!}
	 @include('sessions.form', ['submitButtonText' => 'Add Session'])
{!! Form::close() !!}
 </div>

 @endsection