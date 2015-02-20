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
    <div class="navbar navbar-default mega-menu" role="navigation" id="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="{!!route('index')!!}">
                    <img id="logo-header" class="cus-logo" src="{!!asset('img/au-source.png')!!}" alt="Logo" id="logo1">
                    <img id="logo-header" class="cus-logo" src="{!!asset('img/stem.jpg')!!}" alt="Logo" id="logo2">
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
                            <li><a href="{!!route('index')!!}">Home Page GUEST</a></li>
                            <li><a href="{!!route('news')!!}">News GUEST</a></li>
                            <li><a href="#">Add News ADMIN</a></li>
                        </ul>
                    </li>
                    <!-- End Home -->
                    <!-- About -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!route('about')!!}">About STEM Curriculum</a></li>
                            <li><a href="#">Instructions GUEST</a></li>
                            <li><a href="#">Documentation GUEST</a></li>
                            <li><a href="#">FAQ GUEST</a></li>
                            <li><a href="#">Help GUEST</a></li>
                        </ul>
                    </li>
                    <!-- End About -->
                    <!-- Profile -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!route('register')!!}">Register GUEST</a></li>
                            <li><a href="{!!route('login')!!}">Login GUEST</a></li>
                            <li><a href="{!!route('recover')!!}">Recover Account GUEST</a></li>
                            <li><a href="#">Edit Your Profile USERS</a></li>
                            <li><a href="#">Change Password USERS</a></li>
                            <li><a href="#">Browse Users USERS</a></li>
                            <li><a href="#">Modify Users ADMIN</a></li>
                        </ul>
                    </li>
                    <!-- End Profile -->
                    <!-- Lessons -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Lessons
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!route('lesson')!!}">Browse Lessons GUEST</a></li>
                            <li><a href="{!!route('question')!!}">Browse Questions GUEST</a></li>
                            <li><a href="{!!route('lesson_create')!!}">Create Lessons ADMIN</a></li>
                            <li><a href="#">Modify Lessons ADMIN</a></li>
                            <li><a href="#">Delete Lessons ADMIN</a></li>
                            <li><a href="{!!route('question_create')!!}">Create Questions ADMIN</a></li>
                            <li><a href="#">Modify Questions ADMIN</a></li>
                            <li><a href="#">Delete Questions ADMIN</a></li>
                        </ul>
                    </li>
                    <!-- End About -->
                    <!-- Lesson Plans -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Theme
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Browse Units GUEST</a></li>
                            <li><a href="#">Browse Themes GUEST</a></li>
                            <li><a href="#">Create Themes TEACHER</a></li>
                            <li><a href="#">Modify Your Themes TEACHER</a></li>
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