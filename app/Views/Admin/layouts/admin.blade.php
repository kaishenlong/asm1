<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Eko Eats</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/nalika-icon.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/owl.carousel.css">
    <link rel="stylesheet" href="app/Views/Admin/css/owl.theme.css">
    <link rel="stylesheet" href="app/Views/Admin/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="app/Views/Admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="app/Views/Admin/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="app/Views/Admin/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="app/Views/Admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <!-- <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="../asset/img/logo.png" alt="" /></a>
                <strong><img src="../asset/img/logo.png" alt="" /></strong>
            </div> -->
            <div class="nalika-profile">
                <div class="profile-dtl">
                    <a href="../view/index.php"><img src="../Views/asset/img/logo.png" alt="" /></a>
                    <h2>Eko <span class="min-dtn">Eats</span></h2>
                </div>
                <div class="profile-social-dtl">
                    <ul class="dtl-social">
                        <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                        <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active"><a class="has-arrow" href="{{route('/adhome')}}">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Home</span>
                            </a>
                        </li>

                        <li>
                            <a class="has-arrow" href="product-list.html">

                                <span class="mini-click-non">Sản Phẩm</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Product List" href="{{route('/listsp')}}"><span class="mini-sub-pro">Danh
                                            Sách Sản Phẩm</span></a></li>
                                <li><a title="Product Add " href="{{route('/addsp')}}"><span class="mini-sub-pro">Thêm
                                            Sản Phẩm</span></a></li>
                                <!-- <li><a title="Product Edit" href="index.php?act=suasp"><span class="mini-sub-pro">Sửa Sản phẩm</span></a></li>
                                <li><a title="Compose Mail" href="index.php?act=ctsp"><span class="mini-sub-pro">Chi Tiết Sản Phẩm</span></a></li> -->

                            </ul>



                        </li>
                        <li>
                            <a class="has-arrow" href="{{route('/listdm')}}" aria-expanded="false"> <span
                                    class="mini-click-non">Danh mục</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="{{route('/listdm')}}"><span class="mini-sub-pro">Danh Sách Danh
                                            Mục</span></a></li>
                                <li><a title="View Mail" href="{{route('/adddm')}}"><span class="mini-sub-pro">Thêm
                                            Danh Mục Sản Phảm</span></a></li>
                                <!-- <li><a title="Compose Mail" href="index.php?act=suadm"><span class="mini-sub-pro">Sửa Danh Mục Sản Phẩm</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="{{route('/listtk')}}" aria-expanded="false"><span
                                    class="mini-click-non">Khách hàng</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="{{route('/listtk')}}"><span class="mini-sub-pro">Danh Sách
                                            Tài Khoản</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="indexad.php?act=dsbl" aria-expanded="false"><span class="mini-click-non">Bình Luận</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="indexad.php?act=dsbl"><span class="mini-sub-pro">Danh sách bình luận</span></a></li>
                            </ul>
                        </li> 
                        <li>
                            <a class="has-arrow" href="indexad.php?act=dsdh" aria-expanded="false"><span
                                    class="mini-click-non">Đơn Hàng </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="indexad.php?act=dsdh"><span class="mini-sub-pro">Danh
                                            Sách Đơn Hàng</span></a></li>
                                <!-- <li><a title="Blog" href="index.php?act=dsbl"><span class="mini-sub-pro">Sửa Đơn Hàng</span></a></li>
                                <li><a title="Blog Details" href="index.php?act=dsbl"><span class="mini-sub-pro">Thêm Đơn Hàng</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="indexad.php?act=dsthongke" aria-expanded="false"><span
                                    class="mini-click-non">Thống Kê</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="indexad.php?act=dsthongke"><span
                                            class="mini-sub-pro">Danh Sách Thống Kê</span></a></li>
                                <!-- <li><a title="File Manager" href="index.php?act=suabanner"><span class="mini-sub-pro">Sửa Banner</span></a></li> -->
                            </ul>
                        </li>
                        <!-- <li class="active"><a class="has-arrow" href="index.php">	   
                                   <span class="mini-click-non">Teams</span>
                                </a>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="indexad.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="icon nalika-menu-task"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
                                                <form role="search" class="">
                                                    <input type="text" placeholder="Tìm Kiếm..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="icon nalika-user"></i>
                                                        <span class="admin-name">Eko Eats</span>
                                                        <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span
                                                                    class="icon nalika-user author-log-ic"></span> My
                                                                Profile</a>
                                                        </li>
                                                        <li><a href="login.html"><span
                                                                    class="icon nalika-unlocked author-log-ic"></span>
                                                                Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown"
                                                        role="button" aria-expanded="false"
                                                        class="nav-link dropdown-toggle"></a>

                                                    <div role="menu"
                                                        class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">


                                                        <div class="tab-content custom-bdr-nt">

                                                            <div id="Projects" class="tab-pane fade">
                                                                <div class="projects-settings-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-happiness"></i> Recent
                                                                            Activity</h2>
                                                                        <p> You have 20 Recent Activity.</p>
                                                                    </div>
                                                                    <div
                                                                        class="project-st-list-area project-st-menu-scrollbar">
                                                                        <ul class="projects-st-menu-list">

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Settings" class="tab-pane fade">
                                                                <div class="setting-panel-area">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-gear"></i> Settings
                                                                            Panel</h2>
                                                                        <p> You have 20 Settings. 5 not completed.</p>
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show notifications</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Disable Chat</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example3">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example3">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Enable history</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example4">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example4">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show charts</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example7">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example7">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Update everyday</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                checked=""
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example2">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example2">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Global search</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                checked=""
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example6">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example6">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Offline users</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox"
                                                                                                name="collapsemenu"
                                                                                                checked=""
                                                                                                class="onoffswitch-checkbox"
                                                                                                id="example5">
                                                                                            <label
                                                                                                class="onoffswitch-label"
                                                                                                for="example5">
                                                                                                <span
                                                                                                    class="onoffswitch-inner"></span>
                                                                                                <span
                                                                                                    class="onoffswitch-switch"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @yield('content')
           <footer>
  <div class="footer-copyright-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer-copy-right">
            <p>Ly Quang Phu</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</footer>
<!-- jquery
    ============================================ -->
<script src="app/Views/Admin/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="app/Views/Admin/js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="app/Views/Admin/js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="app/Views/Admin/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="app/Views/Admin/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="app/Views/Admin/js/owl.carousel.min.js"></script>
<!-- sticky JS
    ============================================ -->
<script src="app/Views/Admin/js/jquery.sticky.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="app/Views/Admin/js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="app/Views/Admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="app/Views/Admin/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
    ============================================ -->
<script src="app/Views/Admin/js/metisMenu/metisMenu.min.js"></script>
<script src="app/Views/Admin/js/metisMenu/metisMenu-active.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="app/Views/Admin/js/sparkline/jquery.sparkline.min.js"></script>
<script src="app/Views/Admin/js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
    ============================================ -->
<script src="app/Views/Admin/js/calendar/moment.min.js"></script>
<script src="app/Views/Admin/js/calendar/fullcalendar.min.js"></script>
<script src="app/Views/Admin/js/calendar/fullcalendar-active.js"></script>
<!-- float JS
    ============================================ -->
<script src="app/Views/Admin/js/flot/jquery.flot.js"></script>
<script src="app/Views/Admin/js/flot/jquery.flot.resize.js"></script>
<script src="app/Views/Admin/js/flot/curvedLines.js"></script>
<script src="app/Views/Admin/js/flot/flot-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="app/Views/Admin/js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="app/Views/Admin/js/main.js"></script>


</body>

</html>