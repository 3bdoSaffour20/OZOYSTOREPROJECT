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
                            <h5>المستخدمين</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <table class="table table-striped" style="background-color: #ff6131ea ;">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th>رقم المستخدم</th>
                                        <th>إسم المستخدم</th>
                                        <th>العنوان</th>
                                        <th>رقم الهاتف</th>
                                        <th>عمليات</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                      <tr>
                                        <td>{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->cusname}}</th>
                                        <td>{{$user->Address}}</td>
                                        <td>{{$user->Phone_Num}}</td>
                                    <td>
                                        {{-- <a class="btn btn-success mb-1" href="{{url('/customer-edit/'.$customer->id)}}">تعديل</a>
                                        <a class="btn btn-danger mt-2" href="{{url('/customer-delete/'.$customer->id)}}">حذف</a> --}}
                                    </td>
        
                                </tr>
                                       @endforeach
                                     </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection