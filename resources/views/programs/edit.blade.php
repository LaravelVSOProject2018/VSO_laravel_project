@extends('layouts.admin_edit_master')

@section('content')
<div class='col-md-6 col-md-offset-3'>
  <h3>Edit programs</h3>

<hr>
  
  {!! Form::model($program, ['method' => 'PATCH','files' => true, 'action' => ['ProgramsController@update',$program->id]]) !!}
   @include('programs.form', ['submitButtonText' => 'Save Changes'])
  {!! Form::close() !!}
 </div>

 @endsection