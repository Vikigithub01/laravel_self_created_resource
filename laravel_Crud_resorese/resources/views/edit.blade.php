<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Update the data</h1>
	
	<br>
	<form action="{{ route('cruds.update',$data)}}" method="post">
		
    @csrf
    @method('PUT')
	<input type="hidden" name="id" value={{$data->id}}><br>
    <label>Frist Name</label><br>
	<input type="text" name="FristName" value={{$data->fristname}}><br>
	<label>Last Name</label>
	<br>
	<input type="text" name="LastName" value={{$data->lastname}}><br>
	<label>Address</label>
	<br>
	<textarea name="Address" >{{$data->address}}
	</textarea><br>
	<label>contact number
	</label><br>
	<input type="number" name="ContactNo" value={{$data->contactno}} maxlength="10">
	<br>
	<br>
	<button type="submit">Update</button>
	</form>
	

</body>
</html>