@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {{HTML::style("css/pages/page_log_reg_v1.css")}}
@stop

@section('content')
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <form class="reg-page">
                    <div class="reg-header">
                        <h2>Login to your account</h2>
                    </div>

                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" placeholder="Username" class="form-control">
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" placeholder="Password" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <button class="btn-u pull-right" type="submit">Login</button>
                        </div>
                    </div>

                    <hr>

                    <h4>Forget your Password ?</h4>
                    <p>Click {{HTML::link('user/reset-password', 'here')}} to reset your password.</p>
                </form>
            </div>
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->
@stop