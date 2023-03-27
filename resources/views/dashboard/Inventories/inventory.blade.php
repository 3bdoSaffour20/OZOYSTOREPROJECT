@extends('dashboard.layouts.app')

@section('content')

<div class="container mt-5">
<div class="card"></div>
 <div class="card-header">
 <a class="btn btn-primary" href="{{url('/inventory-add')}}">إضافة مخزن</a> 
</div>
<div class="card-body"></div>
<table class="table table-striped" style="background-color: #ec4917 ;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">رقم المنتج</th>
      <th>إسم المنتج</th>
      <th>السعر</th>
      <th>الكمية</th>
      <th>الصلاحية</th>
      <th>عمليات</th>
      <th></th>
    </tr>
  </thead>
  @foreach ($inventories as $inventory)
  <tbody>
    <tr>
      <td>{{$invwntory->id}}</th>
      <td>{{$invwntory->product_id}}</td>
      <td>{{$invwntory->product->name}}</td>
      <td>{{$invwntory->price}}</td>
      <td>{{$invwntory->quantity}}</td>
      <td>{{$invwntory->expire_date}}</td>
      <td>
      <a class="btn btn-Success" type="button" href="{{('url/invwntory-edit'/). $product->id}}" >تعديل</a>
      <a class="btn btn-Success" type="button" href="{{('url/invwntory-delete'/). $product->id}}" >حذف</a>
      </td>
    </tr>
     @endforeach
      </tbody>
   </table>
</div>
</div>

@endsection