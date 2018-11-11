@extends('layouts.admin_edit_master')

@section('content')

<div class='col-md-6 col-md-offset-3'>
  <h2>Add new program panel</h2>
<hr>
  
{!! Form::open(['action' => 'DepartmentsController@store','files' => true]) !!}
	 @include('departments.form', ['submitButtonText' => 'Add Department'])
{!! Form::close() !!}
 </div>

 @endsection