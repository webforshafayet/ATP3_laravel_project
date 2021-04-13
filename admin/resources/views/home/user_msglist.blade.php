<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Massage</title>
</head>
<body>
    @include('home.navbar');
    <h1>user eeeeMassage</h1>
    <a href="/home">Back</a> |
    <a href="/logout">logout</a> |


    <br>
    <form method="post">
        @csrf
<table border="1">
        <tr>
            <td>IDrrr</td>
            <td>Massageeee</td>

        </tr>


        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userid'] }}</td>
            <td>{{ $list[$i]['massage'] }}</td>

        </tr>
        @endfor
    </table>


        <br>
        <br>
    </form>



    @foreach($errors->all() as $err)
    {{$err}} <br>
@endforeach

</body>
</html>
