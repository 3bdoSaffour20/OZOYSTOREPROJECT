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
        <th scope="col">إسم المنتج</th>
        <th scope="col">السعر</th>
        <th scope="col">الكمية</th>
        <th scope="col">إجمالي القيمة</th>

      </tr>
    </thead>
       
    <tbody>
    @foreach ($orders as $order)     
      <tr>
        <td>
            <div class="row">
                <div class="col-sm-3 hidden-xs"><img src="{{ asset('img') }}/{{ $order->product->img }}" width="100" height="100" class="img-responsive"/></div>
                <div class="col-sm-9">
                {{$order->product->name}}
                </div>
            </div>
        </td>
            <td>{{$order->price}}د.ل</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->price * $order->quantity}}د.ل</td>
      </tr>
      @endforeach
    </tbody>
  </table>
           </div>
        </div>

@endsection