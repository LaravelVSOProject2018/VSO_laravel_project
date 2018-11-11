@extends('layouts.admin_master')

@section('pageheader')
Departments Admin Panel
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
		<th scope="col">Department</th>
		<th scope="col">Description</th>
		<th scope="col" colspan="2">Manage</th>
	</tr>
</thead>
<tbody>
	@foreach($departments as $department)
	<tr class="bg-success">
		<td>{{ $department->name }}</a></td>
		<td>{{ $department->description }}</td>
		<td><a class="btn btn-success" href="{{ route('departments.edit',$department->id)}}">Update</a></td>
		<td>
			<form method="POST" action="{{ route('departments.destroy',$department->id) }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
			<input class="btn btn-danger" type="submit" name="submit" value="Remove">
			</form>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
	<a class="btn btn-primary" href="{{ route('departments.create')}}">Create</a>
	<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
	<a class="btn btn-primary" href="{{ route('programs.index') }}">Go to Programs</a>
	</form>
	
@endsection