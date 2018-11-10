@extends('layouts.admin_master')

@section('pageheader')
Programs Admin Panel
@endsection
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>   
@endif
<table class="table table-striped table-dark" border="2 solid">
<thead>
	<tr bg-primary>
		<th scope="col">Program</th>
		<th scope="col">Description</th>
		<th scope="col">Duration</th>
		<th scope="col">Quota</th>
		<th scope="col">Department</th>
		<th scope="col" colspan="3">Manage</th>
	</tr>
</thead>
<tbody>
	@foreach($programs as $program)
	<tr class="bg-success">
		<td>{{ $program->name }}</a></td>
		<td>{{ $program->description }}</td>
		<td>{{ $program->duration }} years</td>
		<td>{{ $program->quota }} students</td>
		<td>{{ $program->department->name }}</td>
		<td><a class="btn btn-success" href="{{ route('programs.edit',$program->id)}}">Update</a></td>
		<td><a class="btn btn-warning" href="{{ url('programsexams/'.$program->id)}}">Exams</a></td>
		<td>
			<form method="POST" action="{{ route('programs.destroy',$program->id) }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
			<input class="btn btn-danger" type="submit" name="submit" value="Remove">
			</form>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
	<a class="btn btn-primary" href="{{ route('programs.create')}}">Create</a>
	<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
	</form>

@endsection