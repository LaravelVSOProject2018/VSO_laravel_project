@extends('layouts.admin_master')
@section('pageheader')
Session Admin Panel
@endsection
@section('content')
  
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
{{-- @else 
	 <div class="alert alert-warning">
       <strong>Error!</strong>
    </div>  --}}  
@endif
<table class="table table-striped table-dark" border="2 solid">
<thead>
	<tr bg-primary>	
		<th scope="col">Session name</th>
		<th scope="col">Program</th>
		<th scope="col">Exam</th>
		<th scope="col">start_datetime</th>
		<th scope="col">duration</th>
		<th scope="col" colspan="3">Manage</th>
	</tr>
</thead>
<tbody>
	@foreach($sessions as $session)
	<tr class="bg-success">
		<td>{{ $session->name }}</td>
		<td>{{ $session->exam->program->name}}</a></td>
		<td>{{ $session->exam->name }}</a></td>
		<td>{{ $session->start_datetime }}</td>
		<td>{{ $session->duration }} min</td>
		<td><a class="btn btn-success" href="{{ route('sessions.edit',$session->id)}}">Update</a></td>
		<td><a class="btn btn-warning" href="{{-- {{ url('programsexams/'.$program->id)}} --}}">Free</a></td>
		<td>
			<form method="POST" action="{{ route('sessions.destroy',$session->id) }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
			<input class="btn btn-danger" type="submit" name="submit" value="Remove">
			</form>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
	<a class="btn btn-primary" href="{{ route('sessions.create')}}">Create</a>
	<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
	</form>

@endsection