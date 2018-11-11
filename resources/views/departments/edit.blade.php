@extends('layouts.admin_edit_master')

@section('content')
<div class='col-md-6 col-md-offset-3'>
  <h3>Edit Department</h3>

<hr>
  
  {!! Form::model($department, ['method' => 'PATCH','files' => true, 'action' => ['DepartmentsController@update',$department->id]]) !!}
   @include('departments.form', ['submitButtonText' => 'Save Changes'])
  {!! Form::close() !!}
 </div>

 @endsection