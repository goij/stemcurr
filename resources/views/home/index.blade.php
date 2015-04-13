@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {{--<link rel="stylesheet" href="css/pages/blog_magazine.css">--}}
@stop

@section('content')
    @if(Auth::guest())
        <h2>You are not signed in</h2>
        <p>Please <a href='{!!route("login")!!}'"><span class="btn btn-u">Sign In</span></a> or  <a href='{!!route("register")!!}'"><span class="btn btn-u btn-u-sea">Register</span></a>  to gain acccess to the features of the STEM curriculum website.</p>
        <p>Please note, your it may take some time before an admin provides you with access.</p>
    @endif

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
            <div class="col-sm-4 col-md-4">
                <p>
                    <a href='{!!route("unit")!!}' class="btn-u btn-u-sea btn-u-lg btn-block curl-bottom-right" rel="curl-bottom-right" type="button">
                        <i class="fa fa-location-arrow"></i>
                        Browse Units
                    </a>
                </p>
            </div>
            <div class="col-sm-4 col-md-4">
                <p>
                    <a href='{!!route("topic")!!}' class="btn-u btn-u-lg btn-block btn-u-dark-blue curl-bottom-right" rel="curl-bottom-right" type="button">
                        <i class="fa fa-location-arrow"></i>
                        Browse Topics
                    </a>
                </p>
            </div>
            <div class="col-sm-4 col-md-4">
                <p>
                    <a href='{!!route("standard")!!}' class="btn-u btn-u-orange btn-u-lg btn-block curl-bottom-right" rel="curl-bottom-right" type="button">
                        <i class="fa fa-location-arrow"></i>
                        Browse Standards
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
                    <span style="font-weight: bold"><a href="{!!route('user') .'/'. $article->user->id!!}">{!!$article->user->name!!}</a> at {!!$article->updated_at!!}</span>
                </div>
            </div>
        </div>
    @endforeach
@stop