<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert New Admin post</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/post.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>Insert New Admin post</h1>

    <form method="post"  enctype="multipart/form-data">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				<tr>
					<td>Post:</td>

                    <textarea type="text" id="username" name="post" id="" cols="150" rows="20" value="{{old('post')}}" onkeyup="f9()"></textarea>
                    <td><p id="Username" class="form-forget"> </p></td>
					{{-- <td><input type="text" name="post" value="{{old('post')}}"></td> --}}
				</tr>
                <tr>
					<td>Image</td>
					<td>
						<input type="file" name="myfile" value="{{old('myfile')}}">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
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
