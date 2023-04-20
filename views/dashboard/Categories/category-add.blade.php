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
                            <h5>إضافة صنف</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <form action="{{url('/category-add')}}" method="post">
                                    @csrf
                                    

                                <div class="form-group">
                                    <label class="col-form-label">إسم الصنف</label>
                                    <input class="form-control dropify" type="text" name="name">
                                </div>
                            
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" >حفظ</button>
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