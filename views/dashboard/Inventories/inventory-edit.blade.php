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
                            <h5>تعديل خزنة</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <form action="{{url('/inventory-update/'.$inventory->id)}}" method="Post">
                                    @csrf
                                    @method('put')
                          
                                <div class="form-group">
                                  <label for="">المنتج</label>
                                  <select class="form-control" name="product_id" id="">
                                      @foreach ($products as $product)
                                          <option value="{{$product->id}}">{{$product->name}}</option>
                                      @endforeach
                                  </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-form-label ">السعر</label>
                                    <input value="{{$inventory->price}}" class="form-control dropify"  type="text" name="price">
                                </div>

                                <div class="form-group">
                                  <label class="col-form-label ">الكمية</label>
                                  <input value="{{$inventory->quantity}}" class="form-control dropify"  type="text" name="quantity">
                              </div>

                              <div class="form-group">
                                <label class="col-form-label ">تاريخ الصلاحية</label>
                                <input value="{{$inventory->expire_date}}" class="form-control dropify" id="validationCustom05" type="date" name="expire_date">
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