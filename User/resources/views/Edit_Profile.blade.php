<!DOCTYPE html>
<html>
<head>
	<title>Edit profile page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<h1>Edit profile Page</h1>

	<form method="post">
        {{-- @csrf --}}
       {{--  {{csrf_field()}} --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

		<fieldset>
			<legend>Edit profile</legend>
			<table>
			
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
                
                <tr>
					<td>Address</td>
					<td><input type="text" name="address"></td>
				</tr>
                <tr>
					<td>Nationality</td>
					<td><input type="text" name="nationality"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td></td>
				</tr>
			</table>
			<td><a href="/Profile"><input type="button" value="Cancel"></td>
					<br><a href="/home"><input type="button" value=" Back"></a>
					<td></td>
			<a href="/logout">logout</a>
		</fieldset>
	</form>

    {{session('msg')}}

</body>
</html>
