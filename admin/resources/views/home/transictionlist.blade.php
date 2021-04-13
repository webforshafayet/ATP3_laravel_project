<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transiction List</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/transiction.css')}}">
</head>
<body>
    @include('home.navbar');
    <center>

    <h1>Transiction list</h1>


    <br>
    <br>
    <br>
        <form action="{{url('/home/transictionlist/search')}}" method="get">
            <input type="text" name="search">
            <input type="submit" name="" value="search">

        </form>
        <br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Product Name</td>
            <td>Seller name</td>
            <td>Buyer name</td>
            <td>Product Price</td>
            <td>.........ACTION........</td>

        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userid'] }}</td>
            <td>{{ $list[$i]['productname'] }}</td>
            <td>{{ $list[$i]['sellername'] }}</td>
            <td>{{ $list[$i]['buyername'] }}</td>
            <td>{{ $list[$i]['productprice'] }}</td>


            <td>

                <a href="/home/transictiondetails/{{ $list[$i]['userid'] }}">Transiction Details</a>
            </td>
        </tr>
        @endfor
    </table>
    <a href="/home">Back</a> |
    <a href="/logout">logout</a>
    </center>
</body>
</html>
