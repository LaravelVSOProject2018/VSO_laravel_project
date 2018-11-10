@extends('layouts.admin_edit_master')

@section('content')

<div class='col-md-6 col-md-offset-3'>
  <h1>Edit sessions</h1>

<hr>
  
  {!! Form::model($session, ['method' => 'PATCH','files' => true, 'action' => ['SessionsController@update',$session->id]]) !!}
   @include('sessions.form', ['submitButtonText' => 'Save Changes'])
  {!! Form::close() !!}
 </div>

 @endsection