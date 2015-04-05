@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {!!HTML::style("css/pages/page_log_reg_v1.css")!!}
@stop

@section('content')
    {!!Form::open(array('action'=>'UserController@postLogin','class'=>'sky-form'))!!}
    <header>Login form</header>
    <fieldset>
        <section>
            <div class="row">
                <label class="label col col-4">Username</label>
                <div class="col col-8">
                    <label class="input">
                        <i class="icon-append fa fa-user"></i>
                        <input type="text" name="username" placeholder="Username">
                    </label>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <label class="label col col-4">Password</label>

                <div class="col col-8">
                    <label class="input">
                        <i class="icon-append fa fa-lock"></i>
                        <input type="password" name="password" placeholder="Password">
                    </label>

                    <div class="note"><a href="{!!route('recover')!!}" class="modal-opener">Forgot password?</a></div>
                </div>
            </div>
        </section>

    </fieldset>
    <footer>
        <button type="submit" class="btn-u">Log In</button>
        <a href="{!!route('register')!!}" class="btn-u btn-u-default">Register</a>
    </footer>
    {!!Form::close()!!}
@stop