<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sellertable.css')}}">
    <title>View Seller List</title>
</head>
<body>
    @include('home.navbar');
<center>


    <h1>Seller list</h1>

    <br>
    <form action="{{url('/home/sellerlist/search')}}" method="get">
        <input type="text" name="search">
        <input type="submit" name="" value="search">

    </form>
    <br>
    <br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>

            <td>NATIONALITY</td>
            <td>ADDRESS</td>
            <td>.........ACTION........</td>

        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userid'] }}</td>
            <td>{{ $list[$i]['fullname'] }}</td>
            <td>{{ $list[$i]['email'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['nationality'] }}</td>
            <td>{{ $list[$i]['address'] }}</td>
            <td>
                <a href="/home/selleredit/{{ $list[$i]['userid'] }}">Edit</a>|
                <a href="/home/sellerdelete/{{ $list[$i]['userid'] }}">Delete</a>|
                <a href="/home/sellerdetails/{{ $list[$i]['userid'] }}">Details</a>
            </td>
        </tr>

        @endfor
    </table>
   <h2> <a href="/home">Back</a> |
    <a href="/home/sellercreate">Create seller</a> |
    <a href="/logout">logout</a></h2>
</center>
</body>
</html>
