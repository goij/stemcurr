@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {!!HTML::style("css/pages/page_log_reg_v1.css")!!}
@stop

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <form class="reg-page">
                <div class="reg-header">
                    <h2>Register a new account</h2>
                    <p>Already Signed Up? Click <a href="page_login.html" class="color-green">Sign In</a> to login your account.</p>
                </div>

                <label>First Name</label>
                <input type="text" class="form-control margin-bottom-20">

                <label>Last Name</label>
                <input type="text" class="form-control margin-bottom-20">

                <label>Email Address</label>
                <input type="text" class="form-control margin-bottom-20">


                <label>Password</label>
                <input type="password" class="form-control margin-bottom-20">

                <label>Confirm Password</label>
                <input type="password" class="form-control margin-bottom-20">



                <hr>

                <div class="row">
                    <div class="col-lg-6 text-right col-lg-offset-6">
                        <button class="btn-u" type="submit">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
