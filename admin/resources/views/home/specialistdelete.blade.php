<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Specialist</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/specialist.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>Delete Specialist</h1>

			<table>
				<tr>
					<td>Name: </td>
					<td>{{$user['fullname']}}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{{ $user['username']}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{ $user['password']}}</td>
				</tr>
				<tr>
					<td>Nationality</td>
					<td>{{ $user['nationality'] }}</td>
				</tr>
                <tr>
					<td>Email</td>
					<td>{{ $user['email'] }}</td>
				</tr>
                <tr>
					<td>Address</td>
					<td>{{ $user['address'] }}</td>
				</tr>
                <tr>
					<td>Experience</td>
					<td>{{ $user['experience'] }}</td>
				</tr>
                <tr>
					<td>Education</td>
					<td>{{ $user['education'] }}</td>
				</tr>
				<tr>
					<td>
						<h3>Are you sure?</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<form method="post">
							@csrf
							<input type="submit" name="submit" value="Confirm">
						</form>
					</td>
					<td></td>
				</tr>
			</table>
            <a href="/home/specialist"> Back</a>
            </center>
</body>
</html>
