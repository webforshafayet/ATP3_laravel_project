@extends('layout.nav_bar')


@section('page_title')    
<h1>Welcome Specialist! {{ session('username') }} </h1>
@endsection



@section('title')
Home | ABC.com
@endsection
<a href="/customer">Customer</a>
<a href="/admin">Admin</a>
<a href="/home">Home</a>
