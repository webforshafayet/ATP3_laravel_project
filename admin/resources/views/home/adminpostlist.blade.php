<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All post</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/post.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    @include('home.navbar');
<center>
    <h1>View all post</h1>

    <div>
    <br>
    <br>
        <form action="{{url('/home/adminpostlist/search')}}" method="get">
            <input type="text" name="search">
            <input type="submit" name="" value="search">

        </form>
        <br>




    {{-- <table border="1"> --}}
        {{-- <tr>
            <td>POST ID</td>
            <td>Post</td>
            <td>Action</td>

        </tr> --}}

        @for($i=0; $i < count($list); $i++)

        <tr>

        <div class="card" style="width: 50rem;">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
              <h5 class="card-title">Admin post</h5>
              <p class="card-text">  <textarea name="" id="" cols="50" rows="2">{{ $list[$i]['post'] }}</textarea></p>
            </div>

            <div class="card-body">
                <a href="/home/adminpostedit/{{ $list[$i]['userid'] }}">Edit</a> |
                <a href="/home/adminpostdelete/{{ $list[$i]['userid'] }}">Delete</a> |
                <a href="/home/adminpostdetails/{{ $list[$i]['userid'] }}">Details</a>|
                <a href="/home/admincommentcreate/{{ $list[$i]['userid'] }}">comment create</a>|
                <a href="/home/admincommentedit/{{ $list[$i]['userid'] }}">comment update</a> |
                <a href="/home/admincommentdelete/{{ $list[$i]['userid'] }}">comment delete</a>
            </div>
          </div>

           </tr>

            </div>
        {{-- <tr>
            <td>{{ $list[$i]['userid'] }}</td>
            <td>
                <textarea name="" id="" cols="140" rows="5">{{ $list[$i]['post'] }}</textarea>




            </td>



            <td>
                <a href="/home/adminpostedit/{{ $list[$i]['userid'] }}">Edit</a> |
                <a href="/home/adminpostdelete/{{ $list[$i]['userid'] }}">Delete</a> |
                <a href="/home/adminpostdetails/{{ $list[$i]['userid'] }}">Details</a>|
                <a href="/home/admincommentcreate/{{ $list[$i]['userid'] }}">comment create</a>|
                <a href="/home/admincommentedit/{{ $list[$i]['userid'] }}">comment update</a> |
                <a href="/home/admincommentdelete/{{ $list[$i]['userid'] }}">comment delete</a>

            </td>
        </tr> --}}
        @endfor
    {{-- </table> --}}
    <a href="/home">Back</a> |


    <a href="/home/adminpostcreate">Insert new post</a> |
    <a href="/logout">logout</a>
    </center>

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="../darkmode/script.js"></script>
      <script type="text/javascript" src="js/darkmode.js"></script>
</body>
</html>
