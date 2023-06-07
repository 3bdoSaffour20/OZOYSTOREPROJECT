@extends('dashboard.layout.layout')

@section('title')
 تعديل المنتجات
@endsection

@if(session('failed'))
    <div class="alert alert-danger">
        <div class="mb-2">{{session('failed')}}</div>
    </div>
@endif

@section('body')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>إعدادت الموقع
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
                            <h5>تعديل صنف</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                              <form action="{{url('/dashboard/product-update/'.$product->id)}}" method="Post">
                                    @csrf
                                    @method('put')


                                <div class="form-group">
                                    <label class="col-form-label">إسم المنتج</label>
                                    <input value="{{$product->name}}" class="form-control dropify" type="text" name="name">
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-form-label ">وصف المنتج</label>
                                    <input value="{{$product->description}}" class="form-control dropify" type="text" name="description">
                                </div>

                                <div class="form-group">
                                  <label class="col-form-label ">صورة المنتج</label>
                                  <input value="{{$product->img}}" class="form-control dropify" type="text" name="img">
                              </div>

                                <div class="form-group">
                                  <label class="col-form-label ">فئة المنتج</label>
                                  <select class="form-control" name="category_id" id="">
                              @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                                  </select>
                              </div>

                              <div class="form-group">
                                <label class="col-form-label ">تاريخ الإضافة</label>
                                <input value="{{$product->add_date}}" class="form-control dropify" type="date" name="add_date">
                            </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">حفظ التعديلات</button>
                                </div>


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