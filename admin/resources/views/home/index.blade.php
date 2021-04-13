





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/darkmode.css')}}">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="style.css">

    <!--animated cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">


    <title>Responsive website</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="#">Agropedia<span style="font-size: 5px"><button onclick="myFunction()">Night mode</button></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active bg-gradient">
                        <a class="nav-link" href="/home/admin_profile">PROFILE<span class="sr-only"></span></a>
                    </li>


                    <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           POST
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="/home/adminpostlist">Show post</a></li>
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
                          <li><a class="dropdown-item" href="/home/V_sellerlist">Verified seller list</a></li>

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

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="../img/1 (19).jpg" class="d-block w-100" alt="...">
                    <div class="carsoul-caption">
                        <h1 class="animate__animated animate__slideInUp" style="animation-delay: 1s">Welcome home! <span>{{ session('username') }}</span> </h1>
                        <h2 class="animate__animated animate__slideInDown" style="animation-delay: 1s">We are <span> Agropedia</span></h2>
                        <h3 class="animate__animated animate__fadeInUp" style="animation-delay: 2s">Agropedia, an online repository of agricultural information in BD, is now available for agricultural extension workers and students. Described as an audiovisual encyclopedia, the site has a virtual library of information, blogs, and question and answer fora. Initially, nine crops are featured - rice, wheat, chickpea, pigeon pea, vegetable pea, lychee, sugarcane, groundnut, and sorghum</h3>
                        <p class="animate__animated animate__zoomIn" style="animation-delay: 3s">
                            {{-- <a href="#">CONTACT US</a> --}}
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="../img/1 (13).jpg" class="d-block w-100" alt="...">
                    <div class="carsoul-caption">
                        <h2 class="animate__animated animate__bounceInRight" style="animation-delay: 1s">We are <span> Team</span></h2>
                        <h3 class="animate__animated animate__bounceInLeft" style="animation-delay: 2s">Ready serve you</h3>
                        <p class=" animate__animated animate__bounceInRight " style="animation-delay: 3s">
                            {{-- <a href="#">CONTACT US</a> --}}


                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/1 (15).jpg" class="d-block w-100" alt="...">
                    <div class="carsoul-caption">
                        <h2 class="animate__animated animate__zoomIn" style="animation-delay: 1s">We are <span> Deligient</span></h2>
                        <h3 class="animate__animated animate__fadeInLeft" style="animation-delay: 2s">We beileve in a better world</h3>
                        <p class="animate__animated animate__zoomIn" style="animation-delay: 3s">
                            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-c4e44b97-a7e3-45c6-904d-05935ea85ae7"></div>
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="sr-only">Next</span>
                <span class="carousel-control-next-icon" aria-hidden="true"></span>

            </a>
        </div>
    </header>




    <p class="cover-text">


Agropedia, an online repository of agricultural information in BD, is now available for agricultural extension workers and students. Described as an audiovisual encyclopedia, the site has a virtual library of information, blogs, and question and answer fora. Initially, nine crops are featured - rice, wheat, chickpea, pigeon pea, vegetable pea, lychee, sugarcane, groundnut, and sorghum
    </p>

    <section>
        <div class="pimg">
            <div class="ptext">
                <span class="border">
                POST & PROFILE
            </span>
            </div>
        </div>

        <section class="sec">
            <h2>POST & PROFILE</h2>
            <p>
                 You can post your thoughts here & also can update your profile information! <br>

                <a href="/home/admin_profile">View admin profile</a> |
                <a href="/home/adminpostlist">Admin Post</a> | <br>
            </p>
        </section>

        <div class="pimg2">
            <div class="ptext">
                <span class="border trans">
                HELPLINE
            </span>
            </div>
        </div>
        <section class="sec dark">
            <h2>HELPLINE</h2>
            <p>
                 Here, you can chat with others. You can communicate with other users! <br>


                <a href="/home/user_message">user message </a> |
                <a href="/home/seller_message">seller message</a> |
                <a href="/home/specialist_message">specialist message</a> |<br>
                 <a href="/home/videocall">video call</a>



            </p>
        </section>

        <div class="pimg3">
            <div class="ptext">
                <span class="border trans">
                CONTROL &  SERVICE
            </span>
            </div>
        </div>

        <section class="sec ">
            <h2>CONTROL &  SERVICE</h2>
            <p>
                 Here you help others to have their service. You can take all the action over user. you can block or update various type of user.Also control fake identity! <br>

                <a href="/home/userlist">View user list</a> |
                <a href="/home/V_userlist">View Verified user list</a> | <br>

                <a href="/home/sellerlist">View seller list</a> |
                <a href="/home/V_sellerlist">View Verified seller list</a> |  <br>
                <a href="/home/specialist">View  specialist</a> |
                <a href="/home/V_specialist">View  Verified specialist</a> | <br>

                <a href="/home/transictionlist">View  transiction list</a> |

                <a href="/home/productlist">View product list</a>
            </p>
        </section>

        <div class="pimg4">
            <div class="ptext">
                <span class="border">
                ABOUT
            </span>
            </div>
        </div>
        <section class="sec ">
            <h2>About</h2>
            <p>
                Agropedia is an online knowledge repository for information related to agriculture in BD. It includes universal meta models and localized content for a variety of users with appropriate interfaces built in collaborative mode in multiple languages
                <br>
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-5aed526d-bd28-4ab4-bf4c-31d2c8e0f693"></div>
            </p>
        </section>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../darkmode/script.js"></script>
    <script type="text/javascript" src="js/darkmode.js"></script>
</body>

</html>
