<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>adminpost Details</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/post.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>adminpost Details</h1>



			<table>
                <tr>
					<td colspan="2">
						<img src="{{asset('/upload')}}/{{$user['image']}}" width="200px" height="200px"> </td>
				</tr>
				<tr>
					<td>Post: </td>
                    <td>
                        <textarea>{{$user['post']}}</textarea>
                    </td>
                </tr>









			</table>
            <a href="/home/adminpostlist"> Back</a>
            </center>
</body>
</html>
