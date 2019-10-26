<table>
	<thead>
		<th>Nom</th>
		<th>Type</th>
		<th>Size</th>
		<th>Created_at</th>
		<th>Download</th>
		<th>Delete</th>
	</thead>
@foreach ($files as $file)
	<tbody>
		<tr>
			<td> {{$file->name}} </td>
			<td> {{$file->type}} </td>
			<td> {{$file->size}} </td>
			<td> {{$file->created_at}} </td>
			<td><a href="{{route('file.download', ['id' => $file->id])}}" class="btn btn-danger">Download</a></td>
			<td><a href="{{route('file.delete', ['id' => $file->id])}}" class="btn btn-danger">Delete</a></td>
		</tr>
	</tbody>

@endforeach