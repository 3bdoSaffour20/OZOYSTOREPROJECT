@extends('frontend.masters.master')

@section('title')
Home Page
@endsection
@section('content')
 <!-- ===========Hero Section===================== -->

 <main class="hero-section">
    <div>
      <h1 class="fs-200 fs-poppins">
        Beats Solo
        <span class="block lineheight fs-300 bold-900 big-wireless fs-poppins"
          >Wireless</span
        ><span
          class="text-white fs-900 uppercase lineheight-2 bold-bolder fs-poppins"
          >HeadPhone</span
        >
      </h1>
      <img src="{{ asset('Main') }}/assets/image/image1.png" alt="" />
    </div>
    <div class="hero-inner flex">
      <div>
        <button class="large-btn bg-red text-white fs-poppins fs-50">
          Shop By Category
        </button>
      </div>
      <div class="hero-info">
        <h4 class="fs-montserrat">Description</h4>
        <p class="fs-montserrat">
          There are many variations passages of Lorem Ipsum available, but the
          majority have suffered alteration
        </p>
      </div>
    </div>
  </main>

  <!-- =================Product Section======================= -->

  <section class="product-section">
    <div class="category bg-black grid">
      <div>
        <h3 class="text-white fs-50 fs-montserrat bold">
          Enjoy <span class="block fs-300 fs-poppins bold">With</span
          ><span
            class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight"
            >Earphone</span
          >
        </h3>
        <button class="prdduct-btn large-btn text-white bg-red fs-montserrat">
          Browse
        </button>
      </div>
      <div class="product-img1">
        <img src="{{ asset('Main') }}/assets/image/h.png" alt="" />
      </div>
    </div>
    <div class="category bg-yellow grid">
      <div>
        <h3 class="text-white fs-50 fs-montserrat bold">
          New <span class="block fs-300 fs-poppins bold">Wear</span
          ><span
            class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight"
            >Gadget</span
          >
        </h3>
        <button
          class="prdduct-btn large-btn text-yellow bg-white fs-montserrat"
        >
          Browse
        </button>
      </div>
      <div class="product-img2">
        <img src="{{ asset('Main') }}/assets/image/w.png" alt="" />
      </div>
    </div>
    <div class="category bg-red grid">
      <div>
        <h3 class="text-white fs-50 fs-montserrat bold">
          Trend <span class="block fs-300 fs-poppins bold">Devices</span
          ><span
            class="earphone uppercase fs-400 fs-poppins bold-900 lineheight"
            >Laptop</span
          >
        </h3>
        <button class="prdduct-btn large-btn text-red bg-white fs-poppins">
          Browse
        </button>
      </div>
      <div class="product-img3">
        <img src="{{ asset('Main') }}/assets/image/Laptop.png" alt="" />
      </div>
    </div>
    <div class="category bg-gray grid">
      <div>
        <h3 class="text-black fs-50 fs-poppins bold">
          Best
          <span class="block fs-300 fs-poppins bold text-black">Gaming</span
          ><span
            class="earphone uppercase fs-400 fs-poppins bold-900 lineheight"
            >Console</span
          >
        </h3>
        <button class="prdduct-btn large-btn text-white bg-red fs-poppins">
          Browse
        </button>
      </div>
      <div class="product-img4">
        <img src="{{ asset('Main') }}/assets/image/gam.png" alt="" />
      </div>
    </div>
    <div class="category bg-green grid">
      <div>
        <h3 class="text-white fs-50 fs-poppins bold">
          Play <span class="block fs-300 fs-poppins bold">Game</span
          ><span
            class="earphone uppercase fs-400 fs-poppins bold-900 lineheight"
            >Oculus</span
          >
        </h3>
        <button class="prdduct-btn large-btn text-green bg-white fs-poppins">
          Browse
        </button>
      </div>
      <div class="product-img5">
        <img src="{{ asset('Main') }}/assets/image/man2.png" alt="" />
      </div>
    </div>
    <div class="category bg-blue grid">
      <div>
        <h3 class="text-white fs-50 fs-poppins bold">
          New <span class="block fs-300 fs-poppins bold">Amazon</span
          ><span
            class="earphone uppercase fs-400 fs-poppins bold-900 lineheight"
            >speaker</span
          >
        </h3>
        <button class="prdduct-btn large-btn text-blue bg-white fs-poppins">
          Browse
        </button>
      </div>
      <div class="product-img6">
        <img src="{{ asset('Main') }}/assets/image/mus.png" alt="" />
      </div>
    </div>
  </section>

  <!-- ========================================= -->
  <!-- =============Service section============== -->

  <section class="service-section">
    <div class="service">
      <img src="image/free.svg" alt="" />
      <div class="service-info">
        <h3 class="fs-poppins fs-200">Free Shippng</h3>
        <p class="fs-montserrat fs-50">Free Shipping On All Order</p>
      </div>
    </div>
    <div class="service">
      <img src="image/sett.svg" alt="" />
      <div class="service-info">
        <h3 class="fs-poppins fs-200">Money Guarantee</h3>
        <p class="fs-montserrat fs-50">30 Day Money Back</p>
      </div>
    </div>
    <div class="service">
      <img src="image/supt.svg" alt="" />
      <div class="service-info">
        <h3 class="fs-poppins fs-200">Online Support 24/7</h3>
        <p class="fs-montserrat fs-50">Technical Support 24/7</p>
      </div>
    </div>
    <div class="service">
      <img src="image/pay.svg" alt="" />
      <div class="service-info">
        <h3 class="fs-poppins fs-200">Secure Payment</h3>
        <p class="fs-montserrat fs-50">All Cards Accepted</p>
      </div>
    </div>
  </section>

  <!-- ===================Feature Section============= -->

  <section class="feature-section bg-red">
    <div class="feature-one grid">
      <img src="image/p-1.png" alt="" />
      <p class="text-white uppercase">20% OFF</p>
      <p
        class="font-size lineheight fs-500 text-white fs-poppins bold-900 uppercase"
      >
        fine <span class="smile">smile</span>
      </p>
      <p class="text-white fs-poppins fs-50">15 Nov To & Dec</p>
    </div>
    <div class="feature-info">
      <h2 class="fs-200 text-white fs-poppins bold-500">Beats Solo Air</h2>
      <p class="fs-poppins fs-300 bold-800 text-white">Summer Sale</p>
      <p class="fs-montserrat text-white fs-50">
        Company that’s grown from 270 to 480 employees in the last 12 months.
      </p>
      <button class="prdduct-btn large-btn text-red bg-white fs-poppins">
        Shop
      </button>
    </div>
  </section>
  <!-- =============================Best Sellar================== -->

  <section class="best-product container">
    <h2 class="letter-spacing bold-800 fs-poppins">Best Seller Products</h2>
    <p class="fs-montserrat fs-100">
      speakerThere are many variations passages
    </p>
  </section>

  <!-- ===========================Heading======================== -->
  <section class="best-Seller">
    <div class="product grid">
      <img src="{{ asset('Main') }}/assets/image/p-2.jpg" alt="" />
      <p class="fs-poppins bold-500">White EliteBook Tablet 810</p>
      <p class="fs-poppins bold-500">$995.00</p>

      <!-- ---------------------------- -->
      <div class="product-details grid bg-red">
        <i class="text-white uil uil-shopping-cart-alt"></i>
        <i class="text-white uil uil-heart-alt"></i>
      </div>
      <!-- ===================================== -->
    </div>
    <div class="product grid">
      <img src="{{ asset('Main') }}/assets/image/p-3.jpg" alt="" />
      <p class="fs-poppins bold-500">White EliteBook Tablet 810</p>
      <p class="fs-poppins bold-500">$995.00</p>

      <!-- ---------------------------- -->
      <div class="product-details grid bg-red">
        <i class="text-white uil uil-shopping-cart-alt"></i>
        <i class="text-white uil uil-heart-alt"></i>
      </div>
      <!-- ===================================== -->
    </div>
    <div class="product grid">
    
      <img src="{{ asset('Main') }}/assets/image/p-4.jpg" alt="" /> <a href ="product.html" style="color:black";>
      <p class="fs-poppins bold-500">Game Console Controller Cable</p>
      <p class="fs-poppins bold-500">$995.00</p>
      </a>
  
      <!-- ---------------------------- -->
      <div class="product-details grid bg-red">
        <i class="text-white uil uil-shopping-cart-alt"></i>
        <i class="text-white uil uil-heart-alt"></i>
      </div>
      <!-- ===================================== -->
    </div>
    <div class="product grid">
      <img src="{{ asset('Main') }}/assets/image/p-5.jpg" alt="" />
      <p class="fs-poppins bold-500">Rocky Mountain</p>
      <p class="fs-poppins bold-500">$995.00</p>

      <!-- ---------------------------- -->
      <div class="product-details grid bg-red">
        <i class="text-white uil uil-shopping-cart-alt"></i>
        <i class="text-white uil uil-heart-alt"></i>
      </div>
      <!-- ===================================== -->
    </div>
    <div class="product grid">
      <img src="{{ asset('Main') }}/assets/image/p9.jpg" alt="" />
      <p class="fs-poppins bold-500">White EliteBook Tablet 810</p>
      <p class="fs-poppins bold-500">$995.00</p>

      <!-- ---------------------------- -->
      <div class="product-details grid bg-red">
        <i class="text-white uil uil-shopping-cart-alt"></i>
        <i class="text-white uil uil-heart-alt"></i>
      </div>
      <!-- ===================================== -->
    </div>
    <div class="product grid">
      <img src="{{ asset('Main') }}/assets/image/p-7.jpg" alt="" />
      <p class="fs-poppins bold-500">Wireless Audio System Multiroom 360</p>
      <p class="fs-poppins bold-500">$995.00</p>

      <!-- ---------------------------- -->
      <div class="product-details grid bg-red">
        <i class="text-white uil uil-shopping-cart-alt"></i>
        <i class="text-white uil uil-heart-alt"></i>
      </div>
      <!-- ===================================== -->
    </div>
    <div class="product grid">
      <img src="{{ asset('Main') }}/assets/image/p8.png" alt="" />
      <p class="fs-poppins bold-500">Wireless Audio System Multiroom 360</p>
      <p class="fs-poppins bold-500">$995.00</p>

      <!-- ---------------------------- -->
      <div class="product-details grid bg-red">
        <i class="text-white uil uil-shopping-cart-alt"></i>
        <i class="text-white uil uil-heart-alt"></i>
      </div>
      <!-- ===================================== -->
    </div>
    <div class="product grid">
      <img src="{{ asset('Main') }}/assets/image/p9.jpg" alt="" />
      <p class="fs-poppins bold-500">Smartwatch 2.0 LTE Wifi</p>
      <p class="fs-poppins bold-500">$995.00</p>

      <!-- ---------------------------- -->
      <div class="product-details grid bg-red">
        <i class="text-white uil uil-shopping-cart-alt"></i>
        <i class="text-white uil uil-heart-alt"></i>
      </div>
      <!-- ===================================== -->
    </div>
  </section>

  <!-- =========================================== -->
  <section class="feature-section bg-green">
    <div class="feature-green feature-one grid">
      <img src="{{ asset('Main') }}/assets/image/p12.png" alt="" />
      <p class="text-white uppercase">20% OFF</p>
      <p
        class="font-size lineheight fs-500 text-white fs-poppins bold-900 uppercase"
      >
        HAPPY <span class="smile">HOURSE</span>
      </p>
      <p class="text-white fs-poppins fs-50">15 Nov To & Dec</p>
    </div>
    <div class="feature-info">
      <h2 class="fs-200 text-white fs-poppins bold-500">Beats Solo Air</h2>
      <p class="fs-poppins fs-300 bold-800 text-white">Summer Sale</p>
      <p class="fs-montserrat text-white fs-50">
        Company that’s grown from 270 to 480 employees in the last 12 months.
      </p>
      <button class="prdduct-btn large-btn text-green bg-white fs-poppins">
        Shop
      </button>
    </div>
  </section>
  <!-- =========================================== -->

  <!-- =================Heading recent News================================ -->
  <section class="best-product container">
    <h2 class="letter-spacing bold-800 fs-poppins">Recent News</h2>
    <p class="fs-montserrat fs-100">There are many variations passages</p>
  </section>
  <!-- ============Recent News=========================== -->

  <section class="recent-news grid">
    <div class="news grid">
      <img src="{{ asset('Main') }}/assets/image/news-1.png" alt="" />
      <div class="fs-montserrat fs-100 flex padding-inline">
        <p>Ocutober 5, 2022</p>
        <p>by Ecommercestore3/ Edit</p>
      </div>
      <h2 class="fs-poppins padding-inline fs-200 blod-600">
        How to choose perfect gadgets
      </h2>
      <p class="fs-montserrat padding-inline fs-100">
        When, while the lovely valley teems with vapour around me, and the
        meridian sun strikes the upper s ...
      </p>
    </div>

    <div class="news grid">
      <img src="{{ asset('Main') }}/assets/image/news-2.png" alt="" />
      <div class="fs-montserrat fs-100 flex padding-inline">
        <p>Ocutober 5, 2022</p>
        <p>by Ecommercestore3/ Edit</p>
      </div>
      <h2 class="fs-poppins padding-inline fs-200 blod-600">
        How to choose perfect gadgets
      </h2>
      <p class="fs-montserrat padding-inline fs-100">
        When, while the lovely valley teems with vapour around me, and the
        meridian sun strikes the upper s ...
      </p>
    </div>

    <div class="news grid">
      <img src="{{ asset('Main') }}/assets/image/news-1.png" alt="" />
      <div class="post-date fs-montserrat fs-100 flex padding-inline">
        <p>Ocutober 5, 2022</p>
        <p>by Ecommercestore3/ Edit</p>
      </div>
      <h2 class="fs-poppins padding-inline fs-200 blod-600">
        How to choose perfect gadgets
      </h2>
      <p class="fs-montserrat padding-inline fs-100">
        When, while the lovely valley teems with vapour around me, and the
        meridian sun strikes the upper s ...
      </p>
    </div>
  </section>

  <footer>
    <!-- =============Brands================= -->
    <section class="brands grid">
      <div>
        <img src="{{ asset('Main') }}/assets/image/br-1.png" alt="" />
      </div>
      <div>
        <img src="{{ asset('Main') }}/assets/image/br-2.png" alt="" />
      </div>
      <div>
        <img src="{{ asset('Main') }}/assets/image/br-3.png" alt="" />
      </div>
      <div>
        <img src="{{ asset('Main') }}/assets/image/br-4.png" alt="" />
      </div>
      <div>
        <img src="{{ asset('Main') }}/assets/image/br-5.png" alt="" />
      </div>
    </section>
  </footer>
@endsection