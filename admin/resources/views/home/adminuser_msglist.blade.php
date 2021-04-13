<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Massage</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/massge.css')}}">
</head>

<body>
    @include('home.navbar');
    {{-- @include("home.user_msglist") --}}
<center>

    <h1>Admin Massage</h1>
    <a href="/home">Back</a> |
    <a href="/logout">logout</a> |


    <br>

    <br>
        <form action="{{url('/home/user_message/search')}}" method="get">
            <input type="text" name="search">
            <input type="submit" name="" value="search">

        </form>
        <br>
    <form method="post">

        @csrf



        <br>
        <br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Massage</td>

        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['userid'] }}</td>
            <td>{{ $list[$i]['massage'] }}</td>
            {{-- <td>{{ $list[$i]['catagory'] }}</td>
            <td>{{ $list[$i]['unitprice'] }}</td>
            <td>{{ $list[$i]['details'] }}</td>
            <td>{{ $list[$i]['status'] }}</td> --}}
            {{-- <td>
                <a href="/home/productedit/{{ $list[$i]['userid'] }}">Edit</a> |
                <a href="/home/productdelete/{{ $list[$i]['userid'] }}">Delete</a> |
                <a href="/home/productdetails/{{ $list[$i]['userid'] }}">Details</a>
            </td> --}}

        </tr>
        @endfor
    </table>
    </center>

<center>
    <fieldset>

        <table>
            <tr>


                <textarea type="text" name="massage" id="username" cols="150" rows="2" value="{{old('massage')}}" onkeyup="f11()"></textarea>
                <td><p id="Username" class="form-forget"> </p></td>
                {{-- <td><input type="text" name="post" value="{{old('post')}}"></td> --}}
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="massage"></td>
            </tr>
        </table>
    </fieldset>
    </form>

    @foreach($errors->all() as $err)
    {{$err}} <br>
@endforeach
</center>
<script type="text/javascript" src="{{asset('js/resposive_script.js')}}"></script>
</body>
</html>
