@extends('frontend.masters.master')

@section('title')
{{-- {{ $product->name }} --}}
@endsection

@section('content')

<section class="single-product grid">
    @foreach ($products as $product)
    <div  align="center">
      <img src="{{ asset('img') }}/{{ $product->img }}" height="200" width="180" alt="" />
    </div>
    <div class="product-info grid align-from-left-"align="center">
      <h1 class="fs-poppins fs-400 blod-900">{{ $product->name }}</h1>
      



      <div>
        <p class="fs-montserrat lineheight">
          الوصف:
         {{$product->description}}
        </p>
      </div>

      <div class="price">
        <p class="bold-700 fs-poppins fs-300" >
          السعر:
          {{$product->price}}د.ل</p>
      </div>

       <button> <a href="{{ url('/cart/'.$product->id) }}" class="btn btn-primary text-center" role="button">إضافة للمشتريات</a></button>


    </div>
    @endforeach
  </section>

@endsection