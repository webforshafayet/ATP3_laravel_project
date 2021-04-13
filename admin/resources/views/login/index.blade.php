
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<body>
    <form method="post">
    <main>

        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >


        <div class="background">
            <div class="text">
                <h1>Agropedia</h1>

            </div>
            <div class="box">
                <form class="form">

                    <tr>
                        <td><b>Username:</b> </td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <br>
                    <tr>
                        <td><b>Password :</b></td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <br>
                    <tr>
                        <td><input type="submit" name="submit" value="Submit"></td>
                        <br>

                        <td> {{session('msg')}}</td>
                    </tr>
                </form>
            </div>
        </div>
    </main>
</form>

</body>
</html>
