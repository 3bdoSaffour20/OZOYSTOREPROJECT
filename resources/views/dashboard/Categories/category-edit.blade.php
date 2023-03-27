@extends('auth.layouts.app')

@section('content')

<div class="container mt-5">
  <div class="card">
     <div class="card-body">

    <form action="{{url('/category-update/'.$category->id)}}" method="Post">
@csrf
@method('put')
<label for="">إسم الفئة</label>
<input value="{{$product->name}}" class="form-contol mt-1 mb-3" type="text" name="name">

<button type="submit" class="btn btn-success">حفظ التعديلات</button>
      </form>
      </div>
    </div>
  </div>
@endsection

@extends('dashboard.layout.layout')

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
                                <a href="index.html">
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
                              <form action="{{url('/product-update/'.$product->id)}}" method="Post">
                                    @csrf
                                    @method('put')

                                    @if($errors->any())
                                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                                @endif

                                <div class="form-group">
                                    <label class="col-form-label">إسم الصنف</label>
                                    <input class="form-control dropify" id="validationCustom05" type="text" name="name">
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