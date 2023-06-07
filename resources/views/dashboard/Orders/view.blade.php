@extends('dashboard.layout.layout')
@section('title')
عرض الطلبات
@endsection
@section('body')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>إعدادت الطلبات
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard/index')}}">
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

 {{--  ============================================================================================== --}}
 <div class="container-fluid">
    <div class="row product-adding">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>الطلبات</h5>
                </div>
 
 <div class="card-body">
    <div class="digital-add needs-validation">
        <table class="table table-striped" style="background-color: #ff6131ea ;">
 <table class="table">
    <thead>
      <tr>
        <th scope="col">رقم الطلبية</th>
        <th scope="col">إسم المستخدم</th>
        <th scope="col">رقم الهاتف</th>
        <th scope="col">تاريخ الطلب</th>
        <th scope="col">إجمالي القيمة</th>
        <th scope="col">الحالة</th>
        <th scope="col">ملف المستخدم</th>
        <th scope="col">عمليات</th>


      </tr>
    </thead>
       
    <tbody>
    @foreach ($bills as $bill)     
      <tr>
        <td>{{$bill->order_id}}</td>
            <td>{{$bill->user->name}}</td>
            <td>{{$bill->user->Phone_Num}}</td>
            <td>{{$bill->ordered}}</td>
            <td>{{$bill->total}}</td>
            {{-- <td>{{$bill->status->name}}</td> --}}
            <td>
                {{-- <a class="btn btn-success mb-1" href="{{url('/checkout/'.$bill->status_id)}}">معلق</a>
                <a class="btn btn-danger mt-2" href="{{url('/checkout/'.$bill->status_id)}}">قبول</a>
                <a class="btn btn-warning mt-2" href="{{url('/checkout/'.$bill->status_id)}}">رفض</a> --}}
                {{$bill->status->name}}

            </td>
            <td>
                <a class="btn btn-success btn-sm my-1 mb-1" href="{{url('/dashboard/profile/'.$bill->id)}}">عرض الملف</a>
            </td>
            <td>
                <a class="btn btn-warning btn-sm my-1" href="{{url('/dashboard/order-accept/'.$bill->id)}}">قبول للشحن</a>
                <a class="btn btn-success btn-sm my-1" href="{{url('/dashboard/order-deliver/'.$bill->id)}}">تم التوصيل</a>
                <a class="btn btn-primary btn-sm my-1" href="{{url('/dashboard/order-decline/'.$bill->id)}}">رفض</a>
                <a class="btn btn-danger btn-sm my-1 mb-1" href="{{url('/dashboard/order-details/'.$bill->order_id)}}">عرض التفاصيل</a>
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