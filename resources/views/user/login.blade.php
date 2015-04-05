@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {!!HTML::style("css/pages/page_log_reg_v1.css")!!}
@stop

@section('content')
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="color-light">Log In</h2>
        </div>
        {!!Form::open(array('action'=>'UserController@postLogin'))!!}
        <div class="panel-body">
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="User" name="username">
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-6 col-sm-12">
                    <button type="submit" class="btn-u btn-block btn-u-green">Log In</button>
                </div>
            </div>

        </div>
        {!!Form::close()!!}
    </div>
@stop