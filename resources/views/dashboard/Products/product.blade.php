@extends('dashboard.layout.layout')
@section('title')
المنتجات
@endsection
@section('body')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>إعدادت المنتجات
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="{{url('/index')}}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">لوحة التحكم</li>
                            <li class="breadcrumb-item active">إعدادات الموقع</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row product-adding">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>المنتجات</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <table class="table table-striped" style="background-color: #ff6131ea ;">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th>صنف المنتج</th>
                                        <th>إسم المنتج</th>
                                        <th>الوصف</th>
                                        <th>صورة المنتج</th>
                                        <th>السعر</th>
                                        <th>الكمية</th>
                                        <th>تاريخ الإضافة</th>
                                        <th>عمليات</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                      <tr>
                                            <td>{{$product->id}}</th>
                                            <td>{{$product->category->name}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->description}}</th>
                                            <td>
                                                <img src="{{ asset('img') }}/{{ $product->img }}" alt="" height="100px" width="80px">
                                            </td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->quantity}}</td>  
                                            <td>{{$product->add_date}}</td> 
                                      <td>
                                        <a class="btn btn-success mb-1" href="{{url('/dashboard/product-edit/'.$product->id)}}">تعديل</a>
                                        <a class="btn btn-danger mt-2" href="{{url('/dashboard/product-delete/'.$product->id)}}">حذف</a>
                                    </td>
                                </tr>
                                       @endforeach
                                     </tbody>
                                     </table>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection