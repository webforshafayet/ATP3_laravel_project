

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/darkmode.css')}}"> --}}

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    {{-- <link rel="stylesheet" href="style.css"> --}}

    <!--animated cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">


    <title>Responsive website</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light"  >
            <a class="navbar-brand" href="/home">Agropedia<span style="font-size: 5px"></button> </span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button><i>......................................................................................................................................................................................</i>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active bg-gradient" >
                        <a class="nav-link" href="/home/admin_profile">PROFILE<span class="sr-only"></span></a>
                    </li>


                    <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           POST
                        </button>
                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item " href="/home/adminpostlist">Show post</a></li>
                          <li><a class="dropdown-item" href="/home/adminpostcreate">Create post</a></li>

                        </ul>
                      </div></li>


                      <li class="nav-item">
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          HELPLINE
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/home/user_message">User</a></li>
                          <li><a class="dropdown-item" href="/home/specialist_message">Specialist</a></li>
                          <li><a class="dropdown-item" href="/home/seller_message">Seller</a></li>

                        </ul>
                      </div></li>





                      <li class="nav-item">
                      <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          CONTROL
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="/home/userlist">User list</a></li>
                          <li><a class="dropdown-item" href="/home/specialist">Specialist list</a></li>
                          <li><a class="dropdown-item" href="/home/sellerlist">Seller list</a></li>

                          <li><a class="dropdown-item" href="/home/V_userlist">Verified user list</a></li>
                          <li><a class="dropdown-item" href="/home/V_specialist">Verified specialist list</a></li>
                          <li><a class="dropdown-item" href="V_sellerlist">Verified seller list</a></li>

                          <li><a class="dropdown-item" href="/home/transictionlist">View  transiction list</a></li>
                          <li><a class="dropdown-item" href="/home/productlist">View product list</a></li>
                        </ul>
                      </div>
                      </li>

                      <li class="nav-item">

                        <a class="nav-link" href="/home/photogallary">PHOTOGALLARY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/home/chatbox">CHATBOT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>

            </div>

        </nav>

</body>

</html>
