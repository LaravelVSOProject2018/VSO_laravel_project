<div class='form-group'>
 		{!! Form::label('name', 'New Program name:') !!}
 		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	@if ($errors->has('name'))
    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
	@endif

	<div class='form-group'>
 		{!! Form::label('description','Description') !!}
 		{!! Form::textarea('description', null, ['class' => 'form-control', 'cols' => 80, 'rows' =>15, 'style' => 'resize:none']) !!}
	</div>
	@if ($errors->has('description'))
    <div class="alert alert-danger">{{ $errors->first('description') }}</div>
	@endif

	<div class='form-group'>
 		{!! Form::label('duration', 'Duration (years):') !!}
 		{!! Form::text('duration', null, ['class' => 'form-control']) !!}
	</div>
	@if ($errors->has('duration'))
    	<div class="alert alert-danger">{{ $errors->first('duration') }}</div>
	@endif

	<div class='form-group'>
 		{!! Form::label('quota', 'Students Quota:') !!}
		 {!! Form::text('quota', null, ['class' => 'form-control']) !!}
	</div>
	@if ($errors->has('quota'))
   	 <div class="alert alert-danger">{{ $errors->first('photo') }}</div>
	@endif

	<div class='form-group'>
 		{!! Form::label('department', 'Department:') !!}
		{!! Form::select('department',$departments,null,['class' => 'form-control']) !!}
	</div>

<div class='form-group'>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>