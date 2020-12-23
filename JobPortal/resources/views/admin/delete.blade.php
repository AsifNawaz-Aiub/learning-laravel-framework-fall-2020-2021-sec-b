<!DOCTYPE html>
<html>
<head>
	<title>Details Page</title>
</head>
<body>
	<a href="/admin/list">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Employee</legend>
			<table border="1">
				<tr>
					<td>Username : {{$username}} </td>
					
				</tr>
				<tr>
					<td>Password : {{$password}} </td>
				
				</tr>
				<tr>
					<td>Email : {{$email}} </td>
					
				</tr>

				<tr>
					<td>Name : {{$name}} </td>
				
				</tr>

				<tr>
					<td>Company Name : {{$companyname}} </td>
				
				</tr>
				<tr>
					<td>Contact No : {{$contactno}} </td>
				
				</tr>

				<tr>
					<td>Type : {{$usertype}} </td>
					
				</tr>
				<tr>
					<td></td>
                    <td><input type="submit" name="submit" value="Delete"></td>
				</tr>
			</table>
			</fieldset>
		</form>
</body>
</html>