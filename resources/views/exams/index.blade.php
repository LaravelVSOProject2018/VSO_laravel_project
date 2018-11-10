<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
 <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  
<h2>Exams Admin Panel</h2>
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
		@foreach ($exam->sessions as $session)
   			 <td>{{ $session->start_datetime}}</td>   
		@endforeach
		<td><a class="btn btn-success" href="{{ route('exams.edit',$exam->id)}}">Update</a></td>
		<td><a class="btn btn-warning" href="{{-- {{ route('exams.index',$program->id)}} --}}">Free</a></td>
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
	</form>