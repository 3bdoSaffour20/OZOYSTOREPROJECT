@extends('frontend.masters.master')

@section('title')
Cart Page 
@endsection

@section('content')

@if(session()->get('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
@endif

@if(session()->get('failed'))
    <div class="alert alert-danger">
        {{session()->get('failed')}}
    </div>
@endif

<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">المنتج</th>
            <th style="width:10%">السعر</th>
            <th style="width:8%">الكمية</th>
            <th style="width:22%" class="text-center">المجموع الفرعي</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        {{-- @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('img') }}/{{ $details['img'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['price'] }}د.ل</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}د.ل</td>
                    <td class="actions" data-th="">
                   <a href="{{ url('remove-from-cart')}}"><button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> حذف</button> </a>
                    </td>
                </tr>
            @endforeach
        @endif --}}
        @php $total = 0 @endphp
        @foreach ($carts as $cart)
        @php $total += $cart->product->price * $cart->quantity @endphp
            <div class="card">
                {{-- <tr data-id="{{ $id }}"> --}}
                    <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('img') }}/{{ $cart->product->img }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $cart->product->name }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $cart->product->price }}د.ل</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $cart->quantity }}" onchange="getItemId({{$cart->id}})" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $cart->product->price * $cart->quantity }}د.ل</td>
                    <td class="actions" data-th="">
                   <button onclick="itemIdDelete({{$cart->id}})" class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> حذف</button>
                    </td>
                </tr>
            </div>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>المجموع {{ $total }}د.ل</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/explore-category') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
               <a href="{{ url('/checkout')}}"> <button class="btn btn-success"><i class="fa fa-money"></i> Checkout</button></a>
            </td>
        </tr>
    </tfoot>
</table>
@endsection
   
@section('scripts')
<script type="text/javascript">

    var cartItem = 0;
    var cartItemDelete = 0;
    function getItemId(id) {
        cartItem = id;
    }

    function itemIdDelete(id) {
        cartItemDelete = id;
    }
    
   
    $(".cart_update").change(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        $.ajax({
            url: '/update-cart/'+cartItem,
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".cart_remove").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '/remove-from-cart/' + cartItemDelete,
                method: "GET",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
   
</script>
@endsection



{{-- 
<section class="table table-striped">
  @foreach ($products as $product)
      
    <table>
      <thead class="thead fs-poppins text-black bold-700 bg-very-light-gray">
        <tr>
          <td></td>
          <td>Image</td>
          <td>Product</td>
          <td>Price</td>
          <td>Quantity</td>
          <td>Subtotal</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><i class="uil uil-times"></i></td>
          <td><i class="uil uil-user-circle"></i></td>
          <td>Beats</td>
          <td>$995.00</td>
          <td><input type="number" min="0" max="10" /></td>
          <td>$4975.00</td>
        </tr>
      </tbody>
    </table>
    @endforeach

          <button class="cupen-btn fs-poppins bold-700 text-black">Update cart</button>
      </div>
  </div>
    
  </section>

  <section class="check-out grid">

      <div>

      </div>
      <div>
      <h3 class="fs-poppins fs-300 text-black bold-700">Cart totals</h3>

      <table>
          <thead class="thead fs-poppins text-black bold-700">
            <tr>
              <td class="bg-very-light-gray">Subtotal</td>
              <td>$4,975.00</td>
            </tr>
          </thead>
          <thead class="thead fs-poppins text-black bold-700">
            <tr>
              <td class="bg-very-light-gray">Total</td>
              <td class="bold-700">$4,975.00</td>
            </tr>
          </thead>
          <tbody>
          </table> --}}