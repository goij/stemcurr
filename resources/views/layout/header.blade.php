<!--=== Header ===-->
<div class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <!-- Topbar Navigation -->
            <ul class="loginbar pull-right">
                @if(Auth::guest())
                    <li>{!!HTML::link('/user/register','Register')!!}</li>
                    <li class="topbar-devider"></li>
                    <li>{!!HTML::link('/user/login','Login')!!}</li>
                @else
                    <li>{!!Auth::user()->username!!}</li>
                    <li class="topbar-devider"></li>
                    <li>{!!Auth::user()->name!!}</li>
                    <li class="topbar-devider"></li>
                    <li><a href="{!!route('logout')!!}">Logout</a></li>
                @endif

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
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-responsive-collapse">
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
                            <li><a href="{!!route('index')!!}">Home Page</a></li>
                            <li><a href="{!!route('news')!!}">News</a></li>
                            <li><a href="{!!route('about')!!}">About STEM Curriculum</a></li>
                            <li><a href="#">Instructions</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </li>
                    @if(!Auth::guest() && Auth::user()->teacher)
                    <!-- End Home -->
                    <!-- topics -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Teachers
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!route('response')!!}">Your Responses</a></li>
                        </ul>
                    </li>
                    <!-- End topics -->
                    @endif

                    <!-- topics -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Curriculum
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!route('unit')!!}">Units</a></li>
                            <li><a href="{!!route('topic')!!}">Topics</a></li>
                            <li><a href="{!!route('question')!!}">Questions</a></li>
                            <li><a href="{!!route('standard')!!}">Standards</a></li>
                            @if(!Auth::guest() && Auth::user()->faculty)
                                <li><a href="{!!route('topic') . '/create'!!}">Create Topic</a></li>
                                <li><a href="{!!route('question') . '/create'!!}">Create Question</a></li>
                                <li><a href="{!!route('standard') . '/create'!!}">Create Standard</a></li>
                                <li><a href="{!!route('topic_enable') !!}">Enable Topics</a></li>
                                <li><a href="{!!route('question_enable') !!}">Enable Questions</a></li>
                            @endif
                        </ul>
                    </li>
                    <!-- End topics -->
                    <!-- Admin -->
                    @if(!Auth::guest() && Auth::user()->admin)
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{!!route('user')!!}">Administrate Users</a></li>
                            <li><a href="{!!route('news')!!}">Manage News Articles</a></li>
                            <li><a href="{!!route('news')!!}/create">Create News Article</a></li>
                        </ul>
                    </li>
                    @endif
                    <!-- End Admin -->
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
            </div>
            <!--/navbar-collapse-->
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header ===-->