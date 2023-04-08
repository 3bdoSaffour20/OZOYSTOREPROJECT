@extends('dashboard.layout.layout')

@section('body')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>إعدادت المستخدمين
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
                            <h5>إضافة مستخدم</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <form action="{{url('/customer-add')}}" method="post">
                                    @csrf

                    
                                <div class="form-group">
                                  <label for=""> رقم المستخدم</label>
                                  <select class="form-control" name="user_id" id="">
                                      @foreach ($users as $user)
                                          <option value="{{$user->id}}"></option>
                                      @endforeach
                                  </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-form-label ">إسم المستخدم</label>
                                    <input class="form-control dropify"  type="text" name="cusname">
                                </div>

                                <div class="form-group">
                                  <label class="col-form-label ">العنوان</label>
                                  <input class="form-control dropify"  type="text" name="address">
                              </div>

                              <div class="form-group">
                                <label class="col-form-label ">رقم الهاتف</label>
                                <input class="form-control dropify" id="validationCustom05" type="text" name="phone">
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