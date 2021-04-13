<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin comment Details</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/post.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>
    <h1>admin comment Details</h1>



			<table>


                <tr>
                    <td>Comment: </td>
                    <td>
                        <textarea>{{$user['massage']}}</textarea>
                    </td>

				</tr>



			</table>
            <a href="/home/adminpostlist"> Back</a>
            </center>
</body>
</html>
