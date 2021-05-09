@extends('layout.main')
@section('title')
 profile
@endsection

@section('section')
    <h1 align="center">{{$user['username']}} profile</h1>
    <h4 align="center" style="color:red">{{session('update')}}</h4>
    <div align="center">
        <img class="card-img-top feature-img" height="80" src="{{ asset('images/products/'. 'pic.png' ) }}" alt="Card image" >
        <br>
        <table align="center" class="table table-striped table-condensed table-hover"  style="width: 70%">
    <tr style="font-size:20px;">
        <th >NAME</th>
        <th >{{$user['full_name']}}</th>
    </tr>
    <tr>
        <th >USERNAME</th>
        <th >{{$user['username']}}</th>
    </tr>
    

    <tr>
        <th >EMAIL</th>
        <th >{{$user['email']}}</th>
    </tr>
    
   
    <tr>
        <th >COMPANY NAME</th>
        <th >{{$user['company_name']}}</th>
    </tr>
    <tr>
        <th >CITY</th>
        <th >{{$user['city']}}</th>
    </tr>
    <tr>
        <th >COUNTRY</th>
        <th >{{$user['country']}}</th>
    </tr>
    
   
    <tr>
        <td></td>
        <td><a href="{{route('home.index')}}">
            <button class="btn btn-success" style="margin:5px">BACK</button></a>
            <a href="{{route('home.editprofile')}}">
                <button class="btn btn-success" style="margin:5px">Edit</button></a>
                <button class="btn btn-success" style="margin:5px">Delete</button></a>
                

             <button>   <a href="/logout">logout</a></button>
                

        </td>
    </tr>
</table>
    </div>
@endsection
