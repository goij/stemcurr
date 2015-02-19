@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {!!HTML::style("css/pages/page_log_reg_v1.css")!!}
@stop

@section('content')
    <div class="reg-block">
        <div class="reg-block-header">
            <h2>Sign Up</h2>
            <p>Already Signed Up? Click <a class="color-green" href="{!!route('login')!!}">Sign In</a> to login your account.</p>
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Username">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="text" class="form-control" placeholder="Password">
        </div>
        <div class="input-group margin-bottom-30">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            <input type="text" class="form-control" placeholder="Confirm Password">
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-md-offset-6 col-sm-12">
                <button type="submit" class="btn-u btn-block">Register</button>
            </div>
        </div>
    </div>
@stop
