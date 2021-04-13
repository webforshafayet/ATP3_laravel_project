<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Admin comment</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/post.css')}}">
</head>
<body>
    @include('home.navbar');
    {{-- <h1>Edit Admin comment, {{ $user['id'] }}</h1> --}}
     <center>

    <form method="post" enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Edit Admin comment</legend>
			<table>
				<tr>
					<td>comment</td>
					<td><input type="text" id="username" name="massage" value="{{$user['massage']}}"  onkeyup="f10()"></td>
                    <td><p id="Username" class="form-forget"> </p></td>
				</tr>



				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
    @foreach($errors->all() as $err)
    {{$err}} <br>
@endforeach
<a href="/home/adminpostlist"> Back</a>
</center>
<script type="text/javascript" src="{{asset('js/resposive_script.js')}}"></script>
</body>
</html>
