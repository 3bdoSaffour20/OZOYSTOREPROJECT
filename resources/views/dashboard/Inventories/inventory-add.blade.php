@extends('dashboard.layouts.app')

@section('content')

<div class="container mt-5">
  <div class="card">
     <div class="card-body">

    <form action="{{url('/inventory-add')}}" method="Post">
@csrf
<label for="">إسم المنتج</label>
<input class="form-contol mt-1 mb-3" type="text" name="name">

<label for="">إسم المنتج</label>
<input class="form-contol mt-1 mb-3" type="text" name="name">

<label for="">صورة المنتج</label>
<input class="form-contol mt-1 mb-3" type="text" name="img">

<label for="">فئة المنتج</label>
<select class="form-contol mt-1 mb-3" name="category_id" id="">
</select>
<button type="submit" class="btn btn-primary">حفظ</button>
      </form>
      </div>
    </div>
  </div>
@endsection