<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1px">
	<tr>
		<td>Full_Name</td>
		<td>User_Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Phone_number</td>
		<td>Address</td>
		<td>Password</td>
		<td>Confirm_Password</td>
	</tr>

@foreach($data as $data)
	<tr>
		<td>{{$data->Full_Name}}</td>
		<td>{{$data->User_Name}}</td>
		<td>{{$data->Age}}</td>
		<td>{{$data->Email}}</td>
		<td>{{$data->Phone_number}}</td>
		<td>{{$data->Address}}</td>
		<td>{{$data->Password}}</td>
		<td>{{$data->Confirm_Password}}</td>
	</tr>
	@endforeach
</table>
</body>
</html>