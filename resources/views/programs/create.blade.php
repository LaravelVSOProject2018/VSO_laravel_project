  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
 <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 



<div class='col-md-6 col-md-offset-3'>
  <h2>Add new program panel</h2>
<hr>
  
{!! Form::open(['action' => 'ProgramsController@store','files' => true]) !!}
	 @include('programs.form', ['submitButtonText' => 'Add Program'])
{!! Form::close() !!}
 </div>