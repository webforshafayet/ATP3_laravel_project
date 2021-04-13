@extends('layout.main')
@section('title')
 profile
@endsection

@section('section')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <h1>Edit Profile</h1>

    <form method="post">
        @csrf
        <fieldset>
            <legend>Edit</legend>
            <table>

 
                <tr>
                    <td>NAME</td>
                    <td><input type="text" name="name" value="{{$user['full_name']}}"></td>
                </tr>
                <tr>
                    <td>USERNAME</td>
                    <td><input type="text" name="username" value="{{$user['username']}}"></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><input type="text" name="email" value="{{ $user['email'] }}"></td>
                </tr>
                <tr>
                    <td>COMPANY NAME</td>
                    <td><input type="text" name="name" value="{{ $user['company_name'] }}"></td>
                </tr>
                <tr>
                    <td>CITY</td>
                    <td><input type="text" name="dept" value="{{ $user['city'] }}"></td>
                </tr>

                <tr>
                    <td>COUNTRY</td>
                    <td><input type="text" name="dept" value="{{ $user['country'] }}"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <input type="file" name="Image" value="{{ $user['pics'] }}">
                    </td>
                </tr>
                <tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="update"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
@endsection
