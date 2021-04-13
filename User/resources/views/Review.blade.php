<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<form method='post'>
	{{-- @csrf --}}
       {{--  {{csrf_field()}} --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >
	<center>
		<table width="900px" border="0">
			<tr height="80px" width="800px" align="center">
				<td colspan="3">
					 <h1>Review</h1>
				</td>
			</tr>
			<tr>
				<td>Recommended :</td>
				<td><input type="text" name="review" ></td>
			</tr>
			<tr height="40px">
				<td colspan="3" align="center">
				<input type="submit" name="submit" value="Add">
					</br>
					<br><a href="/home"><input type="button" value=" Back"></a>
                    <a href="/logout">logout</a>
				</td>
            </tr>
            
	</center>
</form>
{{session('msg')}}
</body>
</html>