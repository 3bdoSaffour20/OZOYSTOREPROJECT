<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" 
    rel="stylesheet"/>

    <!-- Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
   
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- icon -->

    <!-- Google fonts End -->

    <!-- custon style Sheet & JavaScript -->
    <link rel="stylesheet" href="{{asset('/Main')}}/assets/css/shop.css">
    <link rel="stylesheet" href="{{asset('/Main')}}/assets/css/index.css">
    <link rel="stylesheet" href="{{asset('/Main')}}/assets/css/cart.css">
    <script src="{{ asset('Main') }}/assets/js/index.js" defer></script>
    <script src="{{ asset('Main') }}/assets/js/shop.js" defer></script>
    <!-- custon style Sheet & JavaScript -->
    <title>@yield('title')</title>
  </head>
  <body class="home rtl">
    <header class="primary-header container flex">
      <div class="header-inner-one flex">
        <div class="logo">
          <img src="{{ asset('Main') }}/assets/image/logo.png" alt="" height="100" width="85"/>
        </div>
        <button
          class="mobile-close-btn"
          data-visible="false"
          aria-controls="primary-navigation"
        >
          <i class="uil uil-times-circle"></i>
        </button>
        <nav>
          <ul
            id="primary-navigation"
            data-visible="false"
            class="primary-navigation flex"
          >
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="{{url('/home')}}"
                >الرئيسية</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="{{url('/explore-category')}}"
                >تسوق</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="{{url('/about-us')}}"
                >معلومات عنا</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="{{url('/contact-us')}}"
                >اتصل بنا</a
              >
              <li>
                <a class="fs-100 fs-montserrat bold-500" href="{{url('/product-view/')}}"
                  >طلباتي</a
                >
              </li>
              
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="{{url('/showcart')}}"
                >صفحة عربة التسوق</a
              >
            </li>
          </ul>
        </nav>
      </div>

      <div class="header-login flex">
        <a href="{{url('/logout')}}" class="large-btn bg-red text-white fs-poppins fs-50">تسجيل خروج</a>
        {{-- <i class="uil uil-search"></i> --}}

        <button type="button" class="btn btn-primary" data-toggle="dropdown">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i> العربة <span class="badge badge-pill badge-danger">{{ sizeof($carts) }}</span>
      </button>

      <div class="dropdown-menu">
        <div class="row total-header-section">
            @php $total = 0 @endphp
            @foreach ($carts as $cart)
                @php $total += $cart->product->price * $cart->quantity @endphp
            @endforeach
            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                <p>Total: <span class="text-info">{{ $total }}د.ل</span></p>
            </div>
        </div>
        @if(session('cart'))
        @foreach ($carts as $cart)
                <div class="row cart-detail">
                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                        <img src="{{ asset('img') }}/{{ $cart->product->img }}"  width="100" height="100" />
                    </div>
                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                        <p>{{ $cart->product->name }}</p>
                        <span class="price text-info"> د.ل{{ $cart->product->price }}</span> <span class="count"> Quantity:{{  $cart->product->quantity }}</span>
                    </div>
                </div>
            @endforeach
        @endif

        <div class="row">
          <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
              <a href="{{url('/showcart')}}" class="btn btn-primary btn-block">View all</a>
          </div>
      </div>
        {{-- <i
          id="cart-box"
          aria-controls="cart-icon"
          class="uil uil-shopping-bag"
          ></i> --}}

        <!-- =================1111111111================== -->
        {{-- <div id="cart-icon" data-visible="false" class="cart-icon">
          <div class="shopping flex">
            <p>Shopping Basket</p>
            <i id="cross-btn" class="uil uil-times"></i>
          </div>
          <div class="cart bold-800 flex">
            <i class="uil uil-shopping-cart-alt"></i>
            <p>Cart Is Empty</p> --}}

            <!-- ================================================== -->

            <!-- ================================================== -->
          </div>
        </div>
      </div>
      <div class="mobile-open-btn"><i class="uil uil-align-right"></i></div>
    </header>
    @yield('content')

   
      <!-- =============Footer Menu=================== -->
    <footer>
      <section class="footer grid">
        <div class="footer-logo grid">
          <img src="{{ asset('Main') }}/assets/image/logo.png" alt="" />
          <p class="fs-montserrat fs-200">
            هناك العديد من المقاطع المختلفة المتوفرة في لوريم إيبسوم ، لكن الغالبية متوفرة
          </p>
          <div class="social-media flex">
            <i class="uil uil-facebook-f"></i>
            <i class="uil uil-instagram"></i>
            <i class="uil uil-twitter"></i>
          </div>
        </div>

        <div class="footer-menu grid">
          <h3 class="fs-poppins fs-200 bold-800">روابط سريعة</h3>
          <ul>
            <li>
              <a class="fs-montserrat text-black fs-200" href="{{url('/home')}}">الرئيسية</a>
            </li>
            <li>
              <a class="fs-montserrat text-black fs-200" href="{{url('/shop')}}">تسوق</a>
            </li>
            <li>
              <a class="fs-montserrat text-black fs-200" href="{{url('/about-us')}}">معلومات عنا</a>
            </li>
            <li>
              <a class="fs-montserrat text-black fs-200" href="{{url('/contact-us')}}">إتصل بنا</a>
            </li>
          </ul>
        </div>

        <div class="contact grid">
          <p class="fs-montserrat">
            +99 (0) 101 0000 888 Patricia C. Amedee 4401 Waldeck Street
            Grapevine Nashville, Tx 76051
          </p>
        </div>

     
        </div>
      </section>

      <section class="copyRight">
        <p class="c-font fs-montserrat fs-200">
          © 2023 OzoyStore. All rights reserved.
        </p>
        <p class="fs-montserrat fs-100 text-align p-top">
        سياسة الخصوصية . الشروط و الأحكام
        </p>
      </section>
    </footer>

    <div class="container">
   
      @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div> 
      @endif
  </div>
     
  @yield('scripts')

  </body>
</html>