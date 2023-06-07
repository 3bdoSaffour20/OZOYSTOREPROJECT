@extends('frontend.masters.master')

@section('title')
{{ $category->name }}
@endsection

@section('content')
<div class="container mt-4">
  <div class="justify-content-center">
      <div class="row">
            <center>
           <h2>{{ $category->name }}</h2>
            </center>
        </div>
</br>
</br>
        <div class="row">
          @foreach($products as $product)
          <div class="col-sm-3 mb-3">
            <div class="card">
                <div class="card-body">
                  <div class="d-flex container">
                      <img src="{{ asset('img') }}/{{ $product->img }}" height="160px" width="120px" class="img-fluid">
                  </div>
                      <div class="caption">
                         <a href="{{url('/view-Product/'.$product->name)}}"> <h4>{{ $product->name }}</h4> </a>
                          {{-- <p><strong>الوصف: </strong> <p>{{ $product->description }}</p> --}}
                          <p><strong>السعر: </strong> د.ل{{ $product->price }}</p>
                      </br>
                          <p class="btn-holder"><a href="{{ url('/cart/'.$product->id) }}" class="btn btn-primary text-center" role="button">إضافة للمشتريات</a> </p>
                      </div>
                  </div>
              </div>
            </div>
           @endforeach
    </div>
  </div>
</div>
@endsection




{{-- <main class="shop-main-container grid">
  <section class="shop-product grid">
  
      @foreach ($products as $product)
          <div class="row">
            <div class="col-md-4 product-item">
                  <a href="{{url('/cart/'.$product->id)}}">
                      <div class="product-list grid">
                      <img src="{{ asset('img') }}/{{ $product->img }}" class="img-fluid">
                        <p class="fs-montserrat bold-600">{{$product->name}}</p>
                  <div class="shop-btn flex">
                    <button class="bg-red text-white fs-montserrat">
                      Add To Cart
                    </button>
                    <p class="fs-montserrat bold-700">$ 995.00</p>
                  </div>
                </div>
                  </a>
          </div>
       </div>
          @endforeach
  </section>    
     </main> --}}