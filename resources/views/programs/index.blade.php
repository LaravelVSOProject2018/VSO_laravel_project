<table border=1>
	<tr>
		<td>Name</td>
		<td>Description</td>
		<td>Quota</td>
	</tr>
@foreach( $programs as $program )
	<tr>
		<td> {{ $program->name }}</td>
		<td> {{ $program->description }}</td>
		<td> {{ $program->quota }}</td>
		<td> <a href=" {{ route('programs.edit', $program->id) }} ">Update</a></td>
		<td>
		 	{!! Form::open(['route' => ['programs.destroy', $program->id], 'method' => 'delete'])!!} 
			
			{!! Form::submit('Delete') !!}				

			{!! Form::close() !!}
		</td>
	</tr>

@endforeach
</table>

<a href="{{ route('programs.create') }}"> Add program </a>