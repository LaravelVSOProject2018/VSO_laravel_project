@extends('layouts.all_master')
@section('content')
<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h3>Available programs</h3>
		</div>
</section>
<section class="courses-section spad">
<div class="container">
<table class="table table-striped table-dark" border="2 solid">
<thead>
	<tr bg-primary>
		<th scope="col">Department</th>
		<th scope="col">Program</th>
		<th scope="col">Exam</th>
		<th scope="col">Description</th>
		<th scope="col">Session one</th>
		<th scope="col">Session two</th>
	</tr>
</thead>
<tbody>
	@foreach($exams as $exam)
	<tr class="bg-success">
		<td>{{ $exam->program->department->name}}</a></td>
		<td>{{ $exam->program->name}}</a></td>
		<td>{{ $exam->name }}</td>
		<td>{{ $exam->description }}</td>		
		@if(!($exam->sessions->isEmpty()))
			@foreach ($exam->sessions as $session)
   				 <td>{{ $session->start_datetime}}</td>
			@endforeach
			@else
   			 	<td>Not session yet</td>
   			 	<td>Not session yet</td>
   		@endif 
	</tr>
	@endforeach
	</tbody>
</table>
	<a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>

	</form>

		</div>
	</section>

@endsection

