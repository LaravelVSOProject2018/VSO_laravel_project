@extends('layouts.admin_master')

@section('pageheader')
Users Admin Panel
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
		<th scope="col">Name</th>
		<th scope="col">Email</th>
		<th scope="col">Approved</th>
		<th scope="col">Role</th>
		<th scope="col" colspan="2">Manage</th>
	</tr>
</thead>
<tbody>
	@foreach($users_r as $user_r)
	<tr class="bg-success">
		<td>{{ $user_r->name }}</a></td>
		<td>{{ $user_r->email }}</td>
		<td>{{ $user_r->approved }}</td>
		<td>{{ $user_r->role->role }}</td>
		<td><a class="btn btn-success" href="{{ route('userrights.edit',$user_r->id)}}">Update</a></td>
		<td>
			<form method="POST" action="{{ route('userrights.destroy',$user_r->id) }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
			<input class="btn btn-danger" type="submit" name="submit" value="Remove">
			</form>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
	{{-- <a class="btn btn-primary" href="{{ route('userrights.create')}}">Create</a> --}}
	<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
	<a class="btn btn-primary" href="{{ route('departments.index') }}">Go to Departments</a>
	<a class="btn btn-primary" href="{{ route('programs.index') }}">Go to Programs</a>
	</form>
	
@endsection