<div class='form-group'>
 		{!! Form::label('name', 'New Session name:') !!}
 		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	@if ($errors->has('name'))
    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
	@endif

	<div class='form-group'>
 		{!! Form::label('exam', 'Exam:') !!}
		{!! Form::select('exam',$exam,null,['class' => 'form-control']) !!}
	</div>

	<div class='form-group'>
 		{!! Form::label('duration', 'Duration (min):') !!}
 		{!! Form::text('duration', null, ['class' => 'form-control']) !!}
	</div>
	@if ($errors->has('duration'))
    	<div class="alert alert-danger">{{ $errors->first('duration') }}</div>
	@endif

	<div class='form-group'>
 		{!! Form::label('start_datetime', 'Start Date/Time:') !!}
		 {!! Form::text('start_datetime', null, ['class' => 'form-control']) !!}
	</div>
	@if ($errors->has('start_datetime'))
   	 <div class="alert alert-danger">{{ $errors->first('photo') }}</div>
	@endif


<div class='form-group'>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>
<div>
	<a class="btn btn-lg btn-primary form-control" href="{{ url()->previous() }}">Back</a>
</div>