@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {{--<link rel="stylesheet" href="css/pages/blog_magazine.css">--}}
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <img src='{!! asset("img/stem.png")!!}' class="margin-bottom-10" alt="">
            </div>

            <div class="headline"><h4>AU STEM Curriculum</h4></div>
            <p><strong><span class="dropcap-bg">W</span>elcome to the AU Curriculum Management Website
                    On this page, teachers will be able to create and manage your own lesson plans.
                    These lesson plans will be composed of as many lessons you see fit.
                    Each lesson is composed of one ore more question and answer.
                    Each lesson on this website will contain information about the activitie and many other important details.
                    Any visitor can browse the lessons and lesson plans being used within the STEM school.</strong></p>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12 col-md-12 text-center">
            <div class="headline"><h4>Get Started With AU STEM Curriculum</h4></div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="col-sm-12 col-md-12">
                <p>
                    <button class="btn-u btn-u-lg btn-block btn-u-dark-blue curl-bottom-right" rel="curl-bottom-right" type="button">
                        <i class="fa fa-location-arrow"></i>
                        Browse The Curriculum
                    </button>
                </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p>
                    <button class="btn-u btn-u-lg btn-u-orange btn-block curl-bottom-right" rel="curl-bottom-right" type="button">
                        <i class="fa fa-location-arrow"></i>
                        <strong>Login</strong><br>
                        <div class="cus-btn">Already registered?<br>Click here to go to the login page.</div>
                    </button>
                </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p>
                    <button class="btn-u btn-u-lg btn-u-purple btn-block curl-bottom-right" rel="curl-bottom-right" type="button">
                        <i class="fa fa-location-arrow"></i>
                        <strong>Register</strong><br>
                        <div class="cus-btn">Not registered?<br>Click here to get started.</div>
                    </button>
                </p>
            </div>
        </div>
    </div>

    @foreach(range(0,9) as $num)
        <div class="row">
            <div class="col-md-12">
                <div class="headline"><h4>News Article {!!$num!!}</h4></div>
                <p><strong>This is where a news article would go<br>
                    Text<br>
                    Text<br>
                    Text<br>
                    Text<br></strong></p>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="headline"><h4>Test Tabbed Panel</h4></div>
            <div class="tab-v1">
                <ul class="nav nav-tabs margin-bottom-20">
                    <li class="active"><a data-toggle="tab" href="#home">Top 7 questions</a></li>
                    <li class=""><a data-toggle="tab" href="#profile">Payment assistance</a></li>
                    <li class=""><a data-toggle="tab" href="#messages">Work for Unify</a></li>
                    <li class=""><a data-toggle="tab" href="#settings">About Unify</a></li>
                </ul>
                <div class="tab-content">
                    <!-- Tab Content 1 -->
                    <div id="home" class="tab-pane fade active in">
                        <div id="accordion-v1" class="panel-group acc-v1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-One" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle">
                                            How to Customize Sky-Forms
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse in" id="collapse-One">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-Two" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle">
                                            What is "Error 404" page?
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-Two">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-Three" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle">
                                            How to apply background with "Opacity"
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-Three">
                                    <div class="panel-body">
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-Four" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle">
                                            How to use Vector Map
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-Four">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-Five" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle">
                                            Can I use Unify Template on multiple projects?
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-Five">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-Six" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle">
                                            How can I make sure that I always have the latest version of Unify?
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-Six">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-Seven" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle">
                                            Is it safe to Update?
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-Seven">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content 1 -->

                    <!-- Tab Content 2 -->
                    <div id="profile" class="tab-pane fade">
                        <div id="accordion-v2" class="panel-group acc-v1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v2-One" data-parent="#accordion-v2" data-toggle="collapse" class="accordion-toggle">
                                            Payment assistance first
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse in" id="collapse-v2-One">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v2-Two" data-parent="#accordion-v2" data-toggle="collapse" class="accordion-toggle">
                                            Payment assistance second
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v2-Two">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v2-Three" data-parent="#accordion-v2" data-toggle="collapse" class="accordion-toggle">
                                            Payment assistance third
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v2-Three">
                                    <div class="panel-body">
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v2-Four" data-parent="#accordion-v2" data-toggle="collapse" class="accordion-toggle">
                                            Payment assistanc fourth
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v2-Four">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v2-Five" data-parent="#accordion-v2" data-toggle="collapse" class="accordion-toggle">
                                            Payment assistanc fifth
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v2-Five">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Content 2 -->

                    <!-- Tab Content 3 -->
                    <div id="messages" class="tab-pane fade">
                        <div id="accordion-v3" class="panel-group acc-v1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v3-One" data-parent="#accordion-v3" data-toggle="collapse" class="accordion-toggle">
                                            Work for Unify first
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse in" id="collapse-v3-One">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v3-Two" data-parent="#accordion-v3" data-toggle="collapse" class="accordion-toggle">
                                            Work for Unify second
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v3-Two">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v3-Three" data-parent="#accordion-v3" data-toggle="collapse" class="accordion-toggle">
                                            Work for Unify third
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v3-Three">
                                    <div class="panel-body">
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v3-Four" data-parent="#accordion-v3" data-toggle="collapse" class="accordion-toggle">
                                            Work for Unify fourth
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v3-Four">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v3-Five" data-parent="#accordion-v3" data-toggle="collapse" class="accordion-toggle">
                                            Work for Unify fifth
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v3-Five">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Content 3 -->

                    <!-- Tab Content 4 -->
                    <div id="settings" class="tab-pane fade">
                        <div id="accordion-v4" class="panel-group acc-v1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v4-One" data-parent="#accordion-v4" data-toggle="collapse" class="accordion-toggle">
                                            About Unify first
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse in" id="collapse-v4-One">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v4-Two" data-parent="#accordion-v4" data-toggle="collapse" class="accordion-toggle collapsed">
                                            About Unify second
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v4-Two" style="height: 0px;">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v4-Three" data-parent="#accordion-v4" data-toggle="collapse" class="accordion-toggle collapsed">
                                            About Unify third
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v4-Three">
                                    <div class="panel-body">
                                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v4-Four" data-parent="#accordion-v4" data-toggle="collapse" class="accordion-toggle collapsed">
                                            About Unify fourth
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v4-Four">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse-v4-Five" data-parent="#accordion-v4" data-toggle="collapse" class="accordion-toggle collapsed">
                                            About Unify fifth
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse-v4-Five">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Content 4 -->
                </div>
            </div>
        </div>
    </div>
@stop