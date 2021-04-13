<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transiction Details</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/transiction.css')}}">

</head>
<body>
    @include('home.navbar');
    <center>
    <h1>Transiction Details</h1>



			<table>
				<tr>
					<td>Product Name: </td>
					<td>{{$user['productname']}}</td>
				</tr>
				<tr>
					<td>Seller name:</td>
					<td>{{ $user['sellername']}}</td>
				</tr>
				<tr>
					<td>Buyer name:</td>
					<td>{{ $user['buyername']}}</td>
				</tr>
                <tr>
					<td>Product Price:</td>
					<td>{{ $user['productprice'] }}</td>
				</tr>

			</table>
            <a href="/home/transictionlist"> Back</a>
            </center>
</body>
</html>
