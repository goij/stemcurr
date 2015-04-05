@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {{--<link rel="stylesheet" href="css/pages/blog_magazine.css">--}}
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="headline"><h4>AU STEM Curriculum</h4></div>
            <p><strong><span class="dropcap-bg">W</span>elcome to the AU STEM Curriculum Management Website
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
                    <a href='{!!route("topic")!!}' class="btn-u btn-u-lg btn-block btn-u-dark-blue curl-bottom-right" rel="curl-bottom-right" type="button">
                        <i class="fa fa-location-arrow"></i>
                        Browse The Curriculum
                    </a>
                </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p>
                    <a href='{!!route("login")!!}' class="btn-u btn-u-lg btn-u-orange btn-block curl-bottom-right" rel="curl-bottom-right" type="button">
                        <i class="fa fa-user"></i>
                        <strong>Login</strong><br>
                    </a>
                </p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p>
                    <a href='{!!route("register")!!}' class="btn-u btn-u-lg btn-u-purple btn-block curl-bottom-right" rel="curl-bottom-right" type="button">
                        <i class="fa fa-wrench"></i>
                        <strong>Register</strong><br>
                    </a>
                </p>
            </div>
        </div>
    </div>
    <?php use App\News; use App\User?>
    @foreach(News::all() as $article)
        <div class="row">
            <div class="col-md-12">
                <div class="headline"><h4><a href="{!!route('news')!!}/{!!$article->id!!}">{!!$article->title!!}</a></h4></div>
                <div>
                {!!$article->text!!}
                </div>
                <br>
                <div class="footer">
                    <span style="font-weight: bold">{!!$article->user->name!!} at {!!$article->updated_at!!}</span>
                </div>
            </div>
        </div>
    @endforeach
@stop