 <!-- Page Sidebar Start-->
 <div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        {{-- <div class="logo-wrapper">
            <a href="index.html">
                <img class="d-none d-lg-block blur-up lazyloaded" src="assets/images/dashboard/logo.png"
                    alt="">
            </a>
        </div> --}}
    </div>
    <div class="sidebar custom-scrollbar">
        <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                aria-hidden="true"></i></a>
        <div class="sidebar-user">
           
           
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header" href="{{url('/dashboard/index')}}">
                    <span>الرئيسية</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>المنتجات</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/dashboard/product')}}">
                            <i class="fa fa-circle"></i>
                            <span>قائمة المنتجات</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/dashboard/product-add')}}">
                            <i class="fa fa-circle"></i>
                            <span>إضافة منتج</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="archive"></i>
                    <span>الأصناف</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/dashboard/category')}}">
                            <i class="fa fa-circle"></i>
                            <span>قائمة الأصناف</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/dashboard/category-add')}}">
                            <i class="fa fa-circle"></i>
                            <span>إضافة صنف</span>
                        </a>
                    </li>
                </ul>
            </li>
            

            {{-- <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="dollar-sign"></i>
                    <span>المخازن</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/dashboard/inventory')}}">
                            <i class="fa fa-circle"></i>
                            <span>قائمة المخازن</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/dashboard/inventory-add')}}">
                            <i class="fa fa-circle"></i>
                            <span>إضافة مخزن</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
          

           <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="tag"></i>
                    <span>الطلبات</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    {{-- <li>
                        <a href="{{url('/dashboard/order')}}">
                            <i class="fa fa-circle"></i>
                            <span>order list</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{url('/dashboard/order-view')}}">
                            <i class="fa fa-circle"></i>
                            <span>عرض الطلبات</span>
                        </a>
                    </li>
                </ul>
                     {{-- 
                    <li>
                        <a href="{{url('/dashboard/order-add')}}">
                            <i class="fa fa-circle"></i>
                            <span>add order</span>
                        </a>
                    </li>
                
            </li> --}}
           
            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="clipboard"></i>
                    <span>الإعلانات</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/dashboard/advertise')}}">
                            <i class="fa fa-circle"></i>
                            <span>قائمة الإعلانات</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/dashboard/advertise-add')}}">
                            <i class="fa fa-circle"></i>
                            <span>إضافة إعلان</span>
                        </a>
                    </li>
                </ul>
            </li>
         
            {{-- <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="user-plus"></i>
                    <span>Users</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/customer')}}">
                            <i class="fa fa-circle"></i>User List
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/customer-add')}}">
                            <i class="fa fa-circle"></i>add User
                        </a>
                    </li>
                </ul>
            </li> --}}


            {{-- <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="chrome"></i>
                    <span>Localization</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="translations.html"><i class="fa fa-circle"></i>Translations
                        </a>
                    </li>
                    <li>
                        <a href="currency-rates.html"><i class="fa fa-circle"></i>Currency Rates
                        </a>
                    </li>
                    <li>
                        <a href="taxes.html"><i class="fa fa-circle"></i>Taxes
                        </a>
                    </li>
                </ul>
            </li> --}}

            <li>
                <a class="sidebar-header" href="support-ticket.html"><i data-feather="phone"></i><span>بطاقة الدعم</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>التقارير</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="{{url('/dashboard/settings')}}"><i data-feather="settings"></i><span>اعدادات
                        الموقع</span></a>
            </li>


            <li>
                <a class="sidebar-header" href="{{url('/logout')}}">
                    <i data-feather="log-in"></i>
                    <span>تسجيل الخروج</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->

<!-- Right sidebar Start-->
<div class="right-sidebar" id="right_side_bar">
    <div>
        <div class="container p-0">
            <div class="modal-header p-l-20 p-r-20">
                <div class="col-sm-8 p-0">
                    <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                </div>
                <div class="col-sm-4 text-end p-0">
                    <i class="me-2" data-feather="settings"></i>
                </div>
            </div>
        </div>
        <div class="friend-list-search mt-0">
            <input type="text" placeholder="search friend">
            <i class="fa fa-search"></i>
        </div>
        <div class="p-l-30 p-r-30 friend-list-name">
            <div class="chat-box">
                <div class="people-list friend-list">
                    <ul class="list">
                        <li class="clearfix">
                            <img class="rounded-circle user-image blur-up lazyloaded"
                                src="assets/images/dashboard/user.jpg" alt="">
                            <div class="status-circle online"></div>
                            <div class="about">
                                <div class="name">Vincent Porter</div>
                                <div class="status">Online</div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img class="rounded-circle user-image blur-up lazyloaded"
                                src="assets/images/dashboard/user1.jpg" alt="">
                            <div class="status-circle away"></div>
                            <div class="about">
                                <div class="name">Ain Chavez</div>
                                <div class="status">28 minutes ago</div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img class="rounded-circle user-image blur-up lazyloaded"
                                src="assets/images/dashboard/user2.jpg" alt="">
                            <div class="status-circle online"></div>
                            <div class="about">
                                <div class="name">Kori Thomas</div>
                                <div class="status">Online</div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img class="rounded-circle user-image blur-up lazyloaded"
                                src="assets/images/dashboard/user3.jpg" alt="">
                            <div class="status-circle online"></div>
                            <div class="about">
                                <div class="name">Erica Hughes</div>
                                <div class="status">Online</div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img class="rounded-circle user-image blur-up lazyloaded"
                                src="assets/images/dashboard/user3.jpg" alt="">
                            <div class="status-circle offline"></div>
                            <div class="about">
                                <div class="name">Ginger Johnston</div>
                                <div class="status">2 minutes ago</div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img class="rounded-circle user-image blur-up lazyloaded"
                                src="assets/images/dashboard/user5.jpg" alt="">
                            <div class="status-circle away"></div>
                            <div class="about">
                                <div class="name">Prasanth Anand</div>
                                <div class="status">2 hour ago</div>
                            </div>
                        </li>
                        <li class="clearfix">
                            <img class="rounded-circle user-image blur-up lazyloaded"
                                src="assets/images/dashboard/designer.jpg" alt="">
                            <div class="status-circle online"></div>
                            <div class="about">
                                <div class="name">Hileri Jecno</div>
                                <div class="status">Online</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Right sidebar Ends-->