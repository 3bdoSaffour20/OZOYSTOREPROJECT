@extends('frontend.masters.master')

@section('title')
عرض الطلبات
@endsection

@section('content')
<div class="card-body">
    <div class="digital-add needs-validation">
        <table class="table table-striped" style="background-color: #ff6131ea ;">
 <table class="table">
    <thead>
      <tr>
        <th scope="col">رقم الطلبية</th>
        <th scope="col">تاريخ الطلب</th>
        <th scope="col">تاريخ الشحن</th>
        <th scope="col">إجمالي القيمة</th>
        <th scope="col">الحالة</th>
        <th scope="col">العمليات</th>

      </tr>
    </thead>
       
    <tbody>
    @foreach ($bills as $bill)     
      <tr>
        <td>{{$bill->order_id}}</td>
            {{-- <div class="row">
                <div class="col-sm-3 hidden-xs"><img src="{{ asset('img') }}/{{ $order->product->img }}" width="100" height="100" class="img-responsive"/></div>
                <div class="col-sm-9">
                <td>{{$newOrder->product->name}}
                </div>
            </div> --}}
        </td>
            <td>{{$bill->ordered}}</td>
            <td>{{$bill->shipped}}</td>
            <td>{{$bill->total}}</td>
            <td>{{$bill->status->name}}</td>
            <td>
              <a class='btn btn-primary' href="{{url('/my-order/'.$bill->order_id)}}">عرض التفاصيل</a>
            </td>
      </tr>
      @endforeach
    </tbody>
  </table>
           </div>
        </div>

@endsection