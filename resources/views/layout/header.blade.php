<!--=== Header ===-->
<div class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <!-- Topbar Navigation -->
            <ul class="loginbar pull-right">
                <li>{!!HTML::link('/user/register','Register')!!}</li>
                <li class="topbar-devider"></li>
                <li>{!!HTML::link('/user/login','Login')!!}</li>
            </ul>
            <!-- End Topbar Navigation -->
        </div>
    </div>
    <!-- End Topbar -->

    <!-- Navbar -->
    <div class="navbar navbar-default mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img id="logo-header" src='{!!asset("img/au-logo.png")!!}' alt="Logo" >
                    STEM Curriculum
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li class="dropdown active">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Home
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Option 1: Default Page</a></li>

                            <!-- One Page -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Option 2: One Page</a>
                                <ul class="dropdown-menu">
                                    <li><a target="_blank" href="One-Page/index.html">- One Page Template</a></li>
                                    <li><a target="_blank" href="One-Page/dark-page-example.html">- One Page Dark Theme</a></li>
                                </ul>
                            </li>
                            <!-- End One Page -->

                            <!-- Shop UI Page -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Option 3: Shop UI</a>
                                <ul class="dropdown-menu">
                                    <li><a target="_blank" href="Shop-UI/index.html">- Home Page</a></li>
                                    <li><a target="_blank" href="Shop-UI/shop-ui-inner.html">- Product Page</a></li>
                                    <li><a target="_blank" href="Shop-UI/shop-ui-filter-grid.html">- Filter Grid Page</a></li>
                                    <li><a target="_blank" href="Shop-UI/shop-ui-filter-list.html">- Filter List Page</a></li>
                                    <li><a target="_blank" href="Shop-UI/shop-ui-add-to-cart.html">- Checkout Page</a></li>
                                    <li><a target="_blank" href="Shop-UI/shop-ui-login.html">- Login Page</a></li>
                                    <li><a target="_blank" href="Shop-UI/shop-ui-register.html">- Registration Page</a></li>
                                </ul>
                            </li>
                            <!-- End Shop UI -->

                            <li><a href="page_home8.html">Option 4: Home Discover</a></li>
                            <li><a href="page_home9.html">Option 5: Home Creative</a></li>
                            <li><a href="page_home10.html">Option 6: Home Inspire</a></li>
                            <li><a href="page_home11.html">Option 7: Home Desire</a></li>
                            <li><a href="page_jobs.html">Option 8: Home Jobs</a></li>
                            <li><a href="page_home3.html">Option 9: Amazing Content</a></li>
                            <li><a href="page_home6.html">Option 10: Home Magazine</a></li>
                            <li><a href="page_home4.html">Option 11: Home Sidebar</a></li>
                            <li><a href="page_home7.html">Option 12: Home Portfolio</a></li>
                            <li><a href="page_home1.html">Option 13: Home Default v1</a></li>
                            <li><a href="page_home2.html">Option 14: Home Default v2</a></li>
                            <li><a href="page_home5.html">Option 15: Home Default v3</a></li>

                            <!-- Misc Pages -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);">Options: Misc Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_misc_blank.html">- Blank page</a></li>
                                    <li><a href="page_misc_boxed.html">- Boxed Page</a></li>
                                    <li><a href="page_misc_boxed_img.html">- Boxed Image Page</a></li>
                                    <li><a href="page_misc_boxed_fixed_header.html">- Boxed Fixed Menu</a></li>
                                    <li><a href="page_misc_fixed_header.html">- Fixed Menu</a></li>
                                    <li class="active"><a href="page_misc_dark.html">- Dark Page</a></li>
                                    <li><a href="page_misc_dark_boxed.html">- Dark Boxed Page</a></li>
                                    <li><a href="page_misc_dark_other_color.html">- Dark Page With Different Theme Color</a></li>
                                </ul>
                            </li>
                            <!-- End Misc Pages -->
                        </ul>
                    </li>
                    <!-- End Home -->
                    <!-- About -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">STEM Curriculum</a></li>
                            <li><a href="#">Instructions</a></li>
                            <li><a href="#">Instructions</a></li>
                            <li><a href="#">Instructions</a></li>
                            <li><a href="#">Instructions</a></li>
                            <li><a href="#">Instructions</a></li>
                        </ul>
                    </li>
                    <!-- End About -->
                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn-u" type="button">Go</button>
                                    </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/navbar-collapse-->
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header ===-->