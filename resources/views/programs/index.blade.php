<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
 <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  
<h2>Programs Admin Panel</h2>
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
		<td><a href="{{-- {{ route('animals.show',$animal->id)}} --}}">{{ $program->name }}</a></td>
		<td>{{ $program->description }}</td>
		<td>{{ $program->duration }} years</td>
		<td>{{ $program->quota }} students</td>
		<td>{{ $program->department->name }}</td>
		<td><a class="btn btn-success" href="{{ route('programs.edit',$program->id)}}">Update</a></td>
		<td><a class="btn btn-warning" href="{{-- {{ route('exams.index',$program->id)}} --}}">Exams</a></td>
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
	</form>