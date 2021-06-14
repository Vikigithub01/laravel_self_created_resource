<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Add the data</h1>
	<label>Frist Name</label>
	<br>
	<form action="{{route('cruds.create')}}" method="POST">
		
	@csrf
	<input type="text" name="FristName"><br>
	<label>Last Name</label>
	<br>
	<input type="text" name="LastName"><br>
	<label>Address</label>
	<br>
	<textarea name="Address">
		
	</textarea><br>
	<label>contact number
	</label><br>
	<input type="number" name="ContactNo" maxlength="10">
	<br>
	<br>
	<button type="submit">Save</button>
	</form>
	


	<h1> All data </h1>

<table border="1">
	<tr>
		<td>id</td>
		<td>Frist</td>
		<td>Last</td>
		<td>Address</td>
		<td>contact</td>
		<td colspan="2" style="text-align: center;">Action</td>

	</tr>
	@foreach ($students as $student)
	<tr>
		<td>{{$student->id}}</td>
		<td>{{$student->fristname}}</td>
		<td>{{$student->lastname}}</td>
		<td>{{$student->address}}</td>
		<td>{{$student->contactno}}</td>
		
		 <td><a href="{{ Route('cruds.edit',$student)}}">Edit</a> </td>
		<td> <form action="{{ Route('cruds.destroy',$student)}}" method="POST">
		 	@csrf
		 	@method('DELETE')
		 	<button type="submit"> Deleted</button>
		 </form>
		 </td>


	</tr>

	@endforeach
</table>

</body>
</html>