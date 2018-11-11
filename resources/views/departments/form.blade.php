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
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>
<div>
	<a class="btn btn-lg btn-primary form-control" href="{{ url()->previous() }}">Back</a>
</div>