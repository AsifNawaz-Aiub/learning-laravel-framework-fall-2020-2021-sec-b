<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="/admin">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit Employee</legend>
			<table border="1">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{$username}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{$password}}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{$email}}"></td>
				</tr>

				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{$name}}"></td>
				</tr>

				<tr>
					<td>Company Name</td>
					<td><input type="text" name="cname" value="{{$companyname}}"></td>
				</tr>
				<tr>
					<td>Contact No</td>
					<td><input type="text" name="cno" value="{{$contactno}}"></td>
				</tr>

				<tr>
					<td>type</td>
					<td><input type="text" name="usertype" value="{{$usertype}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>