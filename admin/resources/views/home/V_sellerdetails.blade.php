<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verified  seller details</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/verified.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>Verified Seller Details</h1>



			<table>
				<tr>
					<td>Name: </td>
					<td>{{$user['fullname']}}</td>
				</tr>
				<tr>
					<td>Username:</td>
					<td>{{ $user['username']}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{ $user['password']}}</td>
				</tr>
                <tr>
					<td>Email:</td>
					<td>{{ $user['email'] }}</td>
				</tr>
				<tr>
					<td>Nationality:</td>
					<td>{{ $user['nationality'] }}</td>
				</tr>
                <tr>
					<td>Address:</td>
					<td>{{ $user['address'] }}</td>
				</tr>
                <tr>
					<td>Nid:</td>
					<td>{{ $user['nid'] }}</td>
				</tr>
			</table>
            <a href="/home/V_sellerlist"> Back</a>
            </center>
</body>
</html>
