
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

    <center>

    <h1>Welcome to our shop! {{ session('username') }} </h1>
    <img src="{{asset('/images/1-agriculture.jpg')}}" width="300px" height="200px">
    <br>

    <a href="/Profile">View  profile</a> 

    <br>

    <a href="/Buy_Product">Purchase product!</a> 
    <br>
    <a href="/Make_Payment">Happy Shopping!</a> 

<br>

     <a href="/Report">Report</a> <br>
    <a href="/Comment">Comment</a><br>
    <a href="/Edit_Comment">Edit Comment</a><br>
    <a href="/All_Buyer_Question">Request Information</a><br>
    <a href="/Add_Info">Add Information</a><br>
    <a href="/Browse_Information">Browse Information</a><br>
    <a href="/Review">Review</a> <br>
    <br>
    <a href="/logout">logout</a>


            </center>

</body>
</html>