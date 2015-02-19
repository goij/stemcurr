@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {!!HTML::style("css/pages/page_log_reg_v1.css")!!}
@stop

@section('content')
    <div class="reg-block">
        <div class="reg-block-header">
            <h2>Login</h2>
            <p>Don't Have Account? Click <a class="color-green" href='{!!route("register")!!}'>Sign Up</a> to registration.</p>
        </div>

        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" class="form-control" placeholder="User">
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="text" class="form-control" placeholder="Password">
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-6 col-sm-12">
                <button type="submit" class="btn-u btn-block">Log In</button>
            </div>
        </div>
    </div>
@stop