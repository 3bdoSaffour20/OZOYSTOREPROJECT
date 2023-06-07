@extends('frontend.masters.master')

@section('title')
Categories list
@endsection

@section('content')
<div class="container mt-4">
    <div class="justify-content-center">
        <div class="row">
            <aside class="sidebar-category float-md-left">
                <div class="category-list flex">
                  <h3 class=" fs-poppins bold-700 fs-200">عرض الأصناف</h3>
                </div>
              @foreach ($categories as $category)
              <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{url('view-category/'.$category->name)}}">
                            <h5 class="fw-bold text-center">{{$category->name}}</h5>
                            </a>
                             <div class="d-flex container">
                                <img src="{{ asset('img')}}/{{$category->img}}" alt="" height="28%" width="14%">
                            </div> 
                        </div>
                    </div>
                </div>
                @endforeach
          </aside>
   </div>
 </div>
</div>
@endsection

 {{-- @foreach ($categories as $category)
            <div class="col-md-3 mb-3">
                <a href="{{url('view-category'.$category->name)}}". >
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold text-center">{{$category->name}}</h5>
                             <div class="d-flex container">
                                <img src="{{$category->img}}" alt="" height="150%" width="100%">
                            </div> 
                        </div>
                    </div>
                </div>

                  <div class="shop-category-list">
                  <ul id="side-nav" class="sidebar-nav grid" data-category="false">
                    <li>
                    <h5>  <a class="fs-montserrat text-black bold-500" href="{{url('view-category/'.$category->name)}}">{{$category->name}}</a></h5>
                    </li>
                  </ul>
                </div>
            @endforeach --}}