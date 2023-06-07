@extends('dashboard.layout.layout')

@section('title')
عرض الطلبات
@endsection

@section('body')
<div class="card-body">
    <div class="digital-add needs-validation">
        <table class="table table-striped" style="background-color: #ff6131ea ;">
 <table class="table">
    <thead>
      <tr>
        <th scope="col">رقم الطلبية</th>
        <th scope="col">إسم المنتج</th>
        <th scope="col">السعر</th>
        <th scope="col">الكمية</th>
        <th scope="col">إجمالي القيمة</th>

      </tr>
    </thead>
       
    <tbody>
    @foreach ($orders as $order)     
      <tr>
        <td>{{$order->order_id}}</td>
        <td>{{$order->product->name}}</td>
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