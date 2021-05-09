
@extends('layouts.master')

@section('content')

 <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>

      <div class="col-md-8">
        <div class="widget">
          <h3>Featured Products</h3>
          <div class="row">


            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 't1.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h7 class="card-title">Tractor</h7>
                  <p class="card-text">Taka - 10000</p>
                  <a href="/home/cart"  class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 't2.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h7 class="card-title">Tractor</h7>
                  <p class="card-text">Taka - 10000</p>
                  <a href="/home/cart" class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 't3.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h7 class="card-title">Tractor</h7>
                  <p class="card-text">Taka - 10000</p>
                  <a href="/home/cart"  class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 't4.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h7 class="card-title">Tractor</h7>
                  <p class="card-text">Taka - 10000</p>
                  <a href="/home/cart"  class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'f1.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h7 class="card-title">Fertilizer</h7>
                  <p class="card-text">Taka - 500</p>
                  <a href="/home/cart"  class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'f2.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h7 class="card-title">Fertilizer</h7>
                  <p class="card-text">Taka - 500</p>
                  <a href="/home/cart"  class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

             <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 's1.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h7 class="card-title">Products</h7>
                  <p class="card-text">Taka - 700</p>
                  <a href="/home/cart"  class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>


             <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 's3.png') }}" alt="Card image" >
                <div class="card-body">
                  <h7 class="card-title">Vetenery product</h7>
                  <p class="card-text">Taka - 10000</p>
                  <a href="/home/cart"  class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

             <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 's2.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h7 class="card-title">Biofit</h7>
                  <p class="card-text">Taka - 10000</p>
                  <a href="/home/cart"  class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'f3.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h7 class="card-title">Fertilizer</h7>
                  <p class="card-text">Taka - 500</p>
                  <a href="/home/cart"  class="btn btn-outline-warning">Add to cart</a>
              
                </div>

              </div>

            </div>


          </div>
        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection
