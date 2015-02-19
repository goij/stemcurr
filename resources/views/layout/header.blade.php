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
                            <li><a href="#">Home Page</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Home</a></li>
                        </ul>
                    </li>
                    <!-- End Home -->
                    <!-- About -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">About STEM Curriculum</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </li>
                    <!-- End About -->
                    <!-- Profile -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Edit Your Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Browse Users</a></li>
                            <li><a href="#">Users</a></li>
                            <li><a href="#">Users</a></li>
                            <li><a href="#">Users</a></li>
                        </ul>
                    </li>
                    <!-- End Profile -->
                    <!-- Lessons -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Lessons
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Browse Lessons</a></li>
                            <li><a href="#">Search Lessons</a></li>
                            <li><a href="#">Lessons</a></li>
                            <li><a href="#">Lessons</a></li>
                            <li><a href="#">Lessons</a></li>
                            <li><a href="#">Lessons</a></li>
                        </ul>
                    </li>
                    <!-- End About -->
                    <!-- Lesson Plans -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Unit
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Unit Lesson Project Aggregate Plans</a></li>
                            <li><a href="#">Search Lesson Plans</a></li>
                            <li><a href="#">Lesson Plans</a></li>
                            <li><a href="#">Lesson Plans</a></li>
                            <li><a href="#">Lesson Plans</a></li>
                            <li><a href="#">Lesson Plans</a></li>
                        </ul>
                    </li>
                    <!-- End About -->
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