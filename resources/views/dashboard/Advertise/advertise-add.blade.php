@extends('dashboard.layout.layout')

@section('body')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>إعدادت الإعلانات
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
                            <h5>إضافة إعلان</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <form action="{{ url('/dashboard/advertise-add') }}" method="post">
                                    @csrf
                   
                                    <div class="form-group">
                                        <label class="col-form-label">عنوان اللإعلان</label>
                                        <input class="form-control dropify" type="text" name="AdTitle">
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label">محتوى اللإعلان</label>
                                        <input class="form-control dropify" type="text" name="AdContent">
                                    </div>        

                                  
                                         <div>
                                        <label class="col-form-label"> المنتج</label>
                                        <select class="form-control" name="product_id" id="">
                                            @foreach ($products as $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                            @endforeach    
                                        </select>
                                    </div>

                                    <div >
                                        <label class="col-form-label">الصنف</label>
                                        <select class="form-control" name="category_id" id="">
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach    
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-form-label">قبول اللإعلان</label>
                                        <select class="form-control" name="accept">
                                            <option value="1">نعم</option>
                                            <option value="0">لا</option>
                                        </select>    
                                    </div>   
                                
                                
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">حفظ</button>
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