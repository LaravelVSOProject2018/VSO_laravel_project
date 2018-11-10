 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
 <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 


<div class='col-md-6 col-md-offset-3'>
  <h1>Edit programs</h1>

<hr>
  
  {!! Form::model($program, ['method' => 'PATCH','files' => true, 'action' => ['ProgramsController@update',$program->id]]) !!}
   @include('programs.form', ['submitButtonText' => 'Save Changes'])
  {!! Form::close() !!}
 </div>