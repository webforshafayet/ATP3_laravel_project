<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Admin Post</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/post.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>Edit Admin Post</h1>


    <form method="post" enctype="multipart/form-data">
    	@csrf


			<table >

                {{-- <td>
                    <textarea name="" id="" cols="150" rows="5">{{ $user['post'] }}</textarea>

                </td> --}}

                <tr>
					<td>Picture update</td>

                    <tr>
                        <td colspan="1">
                            <img src="{{asset('/upload')}}/{{$user['image']}}" width="300px" height="300px" value="{{$user['image']}}"  > </td>
                    </tr>
                    <td>
						<input type="file" name="myfile">
					</td>

				</tr>

                <tr>

					<td>POST</td>
					<td ><input type="text" id="username" name="post" value="{{$user['post']}}" onkeyup="f9()"></td>
                    <td><p id="Username" class="form-forget"> </p></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>

	</form>
    @foreach($errors->all() as $err)
    {{$err}} <br>
@endforeach
<a href="/home/adminpostlist">Back</a> |
</center>
<script type="text/javascript" src="{{asset('js/resposive_script.js')}}"></script>
</body>
</html>
