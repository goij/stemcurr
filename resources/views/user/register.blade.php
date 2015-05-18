@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {!!HTML::style("css/pages/page_log_reg_v1.css")!!}
@stop

@section('content')

    {!!Form::open(array('action'=>'UserController@postRegister','class'=>'sky-form'))!!}
        <header>Registration form</header>
        <fieldset>
            <section>
                <label class="input">
                    <i class="icon-append fa fa-user"></i>
                    <input type="text" name="username" placeholder="Username">
                    <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-user"></i>
                    <input type="text" name="name" placeholder="Name">
                    <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-user"></i>
                    <input type="text" name="affiliation" placeholder="Affiliation">
                    <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email address">
                    <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" id="password">
                    <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                </label>
            </section>

            <section>
                <label class="input">
                    <i class="icon-append fa fa-lock"></i>
                    <input type="password" name="password_confirmation" placeholder="Confirm password">
                    <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                </label>
            </section>
        </fieldset>

        <footer>
            <button type="submit" class="btn-u">Register</button>
        </footer>
    {!!Form::close()!!}
@stop
