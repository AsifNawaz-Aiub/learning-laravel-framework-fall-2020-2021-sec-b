<!DOCTYPE html>
<html>
<head>
	<title>Employee List</title>
</head>
<body>
	<a href="/admin">Back</a> |
	<a href="/logout">logout</a>
	<br>
<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Username</td>
			<td>Email</td>
			<td>Name</td>
			<td>Company Name</td>
			<td>Conatact No</td>

			<td>Action</td>
		</tr>

		@for($i=0; $i < count($users); $i++)

			<tr>
				<td>{{$users[$i]['id']}}</td>
				<td>{{$users[$i]['username']}}</td>
				<td>{{$users[$i]['email']}}</td>
				<td>{{$users[$i]['name']}}</td>
				<td>{{$users[$i]['companyname']}}</td>
				<td>{{$users[$i]['contactno']}}</td>
				<td>
					<a href="{{route('emp.edit', $users[$i]['id'])}}">Edit </a> |
					<a href="{{route('emp.show', $users[$i]['id'])}}">Details </a> |
					<a href="/delete/{{$users[$i]['id']}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>