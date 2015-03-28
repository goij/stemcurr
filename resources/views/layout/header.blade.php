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
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Home
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!route('index')!!}">Home Page GUEST</a></li>
                            <li><a href="{!!route('news')!!}">News GUEST</a></li>
                            <li><a href="#">Add News ADMIN</a></li>
                            <li><a href="{!!route('about')!!}">About STEM Curriculum</a></li>
                            <li><a href="#">Instructions GUEST</a></li>
                            <li><a href="#">Documentation GUEST</a></li>
                            <li><a href="#">FAQ GUEST</a></li>
                            <li><a href="#">Help GUEST</a></li>
                        </ul>
                    </li>
                    <!-- End Home -->
                    <!-- topics -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Teachers
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!route('topic')!!}">Browse Your Subjects TEACHER</a></li>
                            <li><a href="{!!route('topic')!!}">Create Teacher Response TEACHER</a></li>
                        </ul>
                    </li>
                    <!-- End topics -->

                    <!-- topics -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Faculty
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!route('topic')!!}">Manage Topics F</a></li>
                            <li><a href="{!!route('question')!!}">Manage Questions F</a></li>
                            <li><a href="{!!route('topic') . '/create'!!}">Create Topic F</a></li>
                            <li><a href="{!!route('question') . '/create'!!}">Create Question F</a></li>
                            <li><a href="{!!route('topic_enable') !!}">Re-Enable Topics F</a></li>
                            <li><a href="{!!route('question_enable') !!}">Disable/Enable Questions F</a></li>
                        </ul>
                    </li>
                    <!-- End topics -->
                    <!-- topics -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Admins
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!route('topic')!!}">Administrate Users ADMIN</a></li>
                            <li><a href="{!!route('topic')!!}">Administrate News ADMIN</a></li>
                        </ul>
                    </li>
                    <!-- End topics -->
                    <!-- Search Block -->
                    <!--
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
                  -->
                    <!-- End Search Block -->
                </ul>
            </div><!--/navbar-collapse-->
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header ===-->