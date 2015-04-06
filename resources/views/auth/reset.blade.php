@extends('layout.master')

@section('content')
    <form class="sky-form" role="form" method="POST" action="/password/reset">
        <header>Reset Password</header>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="token" value="{{ $token }}">
        <fieldset>
            <section>
                <div class="row">
                    <label class="label col col-4">Email</label>

                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            <input type="email" name="email" placeholder="E-Mail">
                            <b class="tooltip tooltip-bottom-right">E-Mail address you signed up with</b>
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
                            <input type="password" name="password" placeholder="Password" id="password">
                            <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                        </label>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <label class="label col col-4">Confirm Password</label>

                    <div class="col col-8">
                        <label class="input">
                            <i class="icon-append fa fa-lock"></i>
                            <input type="password" name="password_confirmation" placeholder="Confirm password">
                            <b class="tooltip tooltip-bottom-right">Don't forget your password</b>
                        </label>
                    </div>
                </div>
            </section>
        </fieldset>
        <footer>
            <button type="submit" class="btn-u">Reset Password</button>
        </footer>
    </form>
@endsection
