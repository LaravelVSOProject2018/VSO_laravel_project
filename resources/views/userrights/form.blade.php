<div class='form-group'>

 		{!! Form::label('name', 'New User name:') !!}
 		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	@if ($errors->has('name'))
    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
	@endif
	
	<div class='form-group'>
 		{!! Form::label('email','Email') !!}
 		{!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>
	@if ($errors->has('email'))
    <div class="alert alert-danger">{{ $errors->first('description') }}</div>
	@endif
	<div class='form-group'>
 		{!! Form::label('approved', 'Approved:') !!}
		{!! Form::select('approved',$approvals,null,['class' => 'form-control']) !!}
	</div>

	<div class='form-group'>
 		{!! Form::label('role', 'Role:') !!}
		{!! Form::select('role',$roles,null,['class' => 'form-control']) !!}
	</div>

<div class='form-group'>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-lg btn-success form-control']) !!}
</div>
<div>
	<a class="btn btn-lg btn-primary form-control" href="{{ url()->previous() }}">Back</a>
</div>