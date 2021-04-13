@extends('layout.nav_bar')


@section('page_title')    
<h1>Welcome Admin! {{ session('username') }} </h1>
@endsection



@section('title')
Home | ABC.com
@endsection
<a href="/customer">Customer</a>