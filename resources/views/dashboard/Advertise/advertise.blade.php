@extends('dashboard.layout.layout')

@section('body')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>إعدادت الإعلانات</h3>
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
                            <h5>الإعلانات</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                <table class="table table-striped" style="background-color: #ff6131ea ;">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th>عنوان اللإعلان</th>
                                        <th>محتوى اللإعلان</th>
                                        <th> المنتج</th>
                                        <th>نوع الصنف</th>
                                        <th>قبول الإعلان</th>
                                        <th>عمليات</th>
                                      </tr>
                                    </thead>
                                    @foreach ($advertises as $advertise)
                                    <tbody>
                                      <tr>
                                            <td>{{$advertise->id}}</th>
                                            <td>{{$advertise->AdTitle}}</td>
                                            <td>{{$advertise->AdContent}}</th>
                                            <td>{{$advertise->product->name}}</td>
                                            <td>{{$advertise->category->name}}</td>
                                            <td>{{$advertise->accept}}</td>

                                            <td>
                                                <a class="btn btn-success" href="{{url('/dashboard/advertise-edit/'.$advertise->id)}}">تعديل</a>
                                                <a class="btn btn-danger" href="{{url('/dashboard/advertise-delete/'.$advertise->id)}}">حذف</a>
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