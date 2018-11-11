@extends('layouts.admin_master')


@section('pageheader')
Exams Admin Panel
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
		<th scope="col">Exam</th>
		<th scope="col">Program</th>
		<th scope="col">Description</th>
		<th scope="col">Session one</th>
		<th scope="col">Session two</th>
		<th scope="col" colspan="3">Manage</th>
	</tr>
</thead>
<tbody>
	@foreach($exams as $exam)
	<tr class="bg-success">
		<td>{{ $exam->name }}</a></td>
		<td>{{ $exam->program->name }}</td>
		<td>{{ $exam->description }}</td>
		@if(!($exam->sessions->isEmpty()))
			@foreach ($exam->sessions as $session)
   				<td>{{ $session->start_datetime}}</td>   
			@endforeach
			@else
   			 	<td>Not session yet</td>
   			 	<td>Not session yet</td>
   		@endif 
		<td><a class="btn btn-success" href="{{ route('exams.edit',$exam->id)}}">Update</a></td>
		<td><a class="btn btn-warning" href="{{ url('examssessions/'.$exam->id)}}">Sessions</a></td>
		<td>
			<form method="POST" action="{{ route('exams.destroy',$exam->id) }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
			<input class="btn btn-danger" type="submit" name="submit" value="Remove">
			</form>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
	<a class="btn btn-primary" href="{{ route('exams.create')}}">Create</a>
	<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
	</form>

@endsection