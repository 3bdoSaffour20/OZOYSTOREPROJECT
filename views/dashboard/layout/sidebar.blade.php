 <!-- Page Sidebar Start-->
 <div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper">
            <a href="index.html">
                <img class="d-none d-lg-block blur-up lazyloaded" src="assets/images/dashboard/multikart-logo.png"
                    alt="">
            </a>
        </div>
    </div>
    <div class="sidebar custom-scrollbar">
        <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                aria-hidden="true"></i></a>
        <div class="sidebar-user">
           
            <div>
                <h6 class="f-14">JOHN</h6>
                <p>general manager.</p>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header" href="index.html">
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>Products</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/product')}}">
                            <i class="fa fa-circle"></i>
                            <span>product list</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/product-add')}}">
                            <i class="fa fa-circle"></i>
                            <span>add product</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="archive"></i>
                    <span>Categories</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/category')}}">
                            <i class="fa fa-circle"></i>
                            <span>category list</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/category-add')}}">
                            <i class="fa fa-circle"></i>
                            <span>add category</span>
                        </a>
                    </li>
                </ul>
            </li>
            

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="dollar-sign"></i>
                    <span>Inventories</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/inventory')}}">
                            <i class="fa fa-circle"></i>
                            <span>inventory list</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/inventory-add')}}">
                            <i class="fa fa-circle"></i>
                            <span>add inventory</span>
                        </a>
                    </li>
                </ul>
            </li>
          

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="tag"></i>
                    <span>Orders</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/order')}}">
                            <i class="fa fa-circle"></i>
                            <span>order list</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/order-add')}}">
                            <i class="fa fa-circle"></i>
                            <span>add order</span>
                        </a>
                    </li>
                </ul>
            </li>
           
            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="clipboard"></i>
                    <span>Advertises</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/advertise')}}">
                            <i class="fa fa-circle"></i>
                            <span>advertise list</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/advertise-add')}}">
                            <i class="fa fa-circle"></i>
                            <span>add advertise</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="media.html">
                    <i data-feather="camera"></i>
                    <span>Media</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="align-left"></i>
                    <span>Menus</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="menu-list.html">
                            <i class="fa fa-circle"></i>Menu Lists
                        </a>
                    </li>
                    <li>
                        <a href="create-menu.html">
                            <i class="fa fa-circle"></i>Create Menu
                        </a>
                    </li>
                </ul>
            </li>

            <li>
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
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="users"></i>
                    <span>Vendors</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{url('/subscriber')}}">
                            <i class="fa fa-circle"></i>Vendor List
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/subscriber-add')}}">
                            <i class="fa fa-circle"></i>Create Vendor
                        </a>
                    </li>
                </ul>
            </li>

            <li>
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
            </li>

            <li>
                <a class="sidebar-header" href="support-ticket.html"><i data-feather="phone"></i><span>Support
                        Ticket</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="{{url('/settingindex')}}"><i data-feather="settings"></i><span>اعدادات
                        الموقع</span></a>
            </li>

            <li>
                <a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
            </li>

            <li>
                <a class="sidebar-header" href="forgot-password.html">
                    <i data-feather="key"></i>
                    <span>Forgot Password</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="{{url('/login')}}">
                    <i data-feather="log-in"></i>
                    <span>Login</span>
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