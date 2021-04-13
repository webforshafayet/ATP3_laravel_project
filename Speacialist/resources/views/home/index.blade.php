
@extends('layout.nav_bar')

@section('content')


@extends('layouts.masters')

@section('page_title')    
<h1>Welcome home! {{ session('username') }} </h1>
@endsection



@section('title')
Home | ABC.com
@endsection

 


          </div>
        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection
