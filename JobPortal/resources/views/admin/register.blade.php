<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

</head>
<body>
<form method="post" enctype="multipart/form-data">

<input type="hidden" name="_token" value="{{csrf_token()}}">
<fieldset>
    <legend>Create User</legend>
<table>
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" value="{{old('username')}}"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" value="{{old('password')}}"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email" value="{{old('email')}}"></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="{{old('name')}}"></td>
    </tr>
    <tr>
        <td>Compay Name</td>
        <td><input type="text" name="cname" value="{{old('cname')}}"></td>
    </tr>

    <tr>
        <td>Contact No</td>
        <td><input type="text" name="cno" value="{{old('cno')}}"></td>
    </tr>


     <tr>
		 <td>type</td>
		<td><input type="text" name="type" value="{{old('type')}}"></td>
	</tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
</table>
</fieldset>
</form>

@foreach($errors->all() as $err)
{{$err}} <br>
@endforeach



</body>
</html>