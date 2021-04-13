<!DOCTYPE html>
<html>
<head>
	<title>Happy Purchase page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<h1>Happy Purchase Page</h1>

	<form method="post">
        {{-- @csrf --}}
       {{--  {{csrf_field()}} --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

		<fieldset>
			<legend>Happy Purchase</legend>
			<table>
			
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="digit" name="price"></td>
				</tr>
				
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td></td>
				</tr>
			</table>
            <td><a href="/Buy_Product"><input type="button" name="submit" value="Cancel"></td>
					<br><a href="/home"><input type="button" value=" Back"></a>
					<td></td>
			<a href="/logout">logout</a>
		</fieldset>
	</form>

    {{session('msg')}}

</body>
</html>
