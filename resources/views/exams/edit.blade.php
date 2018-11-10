@extends('layouts.admin_edit_master')

@section('content')


<div class='col-md-6 col-md-offset-3'>
  <h3>Edit Exam</h3>

<hr>
  
  {!! Form::model($exam, ['method' => 'PATCH','files' => true, 'action' => ['ExamsController@update',$exam->id]]) !!}
   @include('exams.form', ['submitButtonText' => 'Save Changes'])
  {!! Form::close() !!}
 </div>

 @endsection