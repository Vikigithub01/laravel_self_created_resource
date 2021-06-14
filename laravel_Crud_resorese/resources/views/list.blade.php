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
		<td>{{$student['id']}}</td>
		<td>{{$student['fristname']}}</td>
		<td>{{$student['lastname']}}</td>
		<td>{{$student['address']}}</td>
		<td>{{$student['contactno']}}</td>
		<!-- <td><a href={{"delete/".$student['id']}}> Deleted</a></td>
		<td><a href={{"edit/".$student['id']}}>Edit</a> </td> -->


	</tr>

	@endforeach
</table>