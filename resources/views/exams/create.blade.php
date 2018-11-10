@extends('layouts.admin_edit_master')

@section('content')

<div class='col-md-6 col-md-offset-3'>
  <h2>Add new exam panel</h2>
<hr>
  
{!! Form::open(['action' => 'ExamsController@store','files' => true]) !!}
	 @include('exams.form', ['submitButtonText' => 'Add Exam'])
{!! Form::close() !!}
 </div>

@endsection