@extends('layout.main')

 <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@section('nav_bar')
<a href="/home/create">Create user</a> |
<a href="{{route('home.userlist')}}">View user list</a> |

<a href="/home/sellerlist">View Seller list</a> |
<a href="/home/profile">Profile</a> |
<a href="/home/notification">Notification</a> |
<a href="/specialist">Specialist</a>|
<a href="/home/help_center">Go Help_center</a> |
<a href="/home/comment">Comment</a> |
<a href="/home/product">Product</a> |


<a class="nav-link" href="http://127.0.0.1:8000/">Start Page <span class="sr-only"></span></a>
@endsection
