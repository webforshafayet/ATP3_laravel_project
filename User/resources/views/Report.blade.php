<!DOCTYPE html>
<html>
<head>
	<title>Report page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<h1>Report Page</h1>

	<form method="post">
        {{-- @csrf --}}
       {{--  {{csrf_field()}} --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

		<fieldset>
			<legend>Report</legend>
			<table>
			
				<tr>
					<td>Report</td>
					<td><input type="text" name="report"></td>
				</tr>
				
				
			</table>
		</fieldset>
		<tr>
				<input type="submit" name="submit" value="Add">
					</br>
					
				</tr>
		<br><a href="/home"><input type="button" value=" Back"></a>
                    <a href="/logout">logout</a>
	</form>

    {{session('msg')}}

</body>
</html>
